<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Product;
use App\Models\Master\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::get();
        $products = Product::latest()->paginate(20);
        return view('admin.products.product.index', compact('products', 'tags'))->with('no', 1);
    }

    // public function fetch()
    // {
    //     $products = Product::latest()->get();

    //     return response()->json([
    //         'message' => 'list data products',
    //         'products' => $products
    //     ], 200);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tag' => 'required',
            'product_name' => 'required|unique:products,product_name',
            'price' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);

        try {
            if($request->has('image'))
            {
                $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                \Image::make($request->image)->save(public_path('image_products/').$name);

            }

            $post = Product::create([
                'tag' => json_encode($request->tag),
                'product_name' => $request->product_name,
                'price' => $request->price,
                'image' => $name ? $name : 'product.jpg',
                'content' => $request->content,
                'slug' => \Str::slug($request->product_name)
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $this->validate($request, [
            'tag' => 'required',
            'product_name' => 'required',
            'price' => 'required',
            'content' => 'required',
        ]);

        try {

            $currentgambar = $product->image;

            if($request->image !== null)
            {

                if ($request->image != $currentgambar) {

                        $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                        \Image::make($request->image)->save(public_path('image_products/').$name);

                        $imageProducts = public_path('image_products/').$currentgambar;
                        if(file_exists($imageProducts))
                        {
                            @unlink($imageProducts);
                        }
                }else{
                    $name = $currentgambar;
                }

            }else{
                $name = $currentgambar;
            }

            $post->update([
                'tag' => json_encode($request->tag),
                'product_name' => $request->product_name,
                'price' => $request->price,
                'image' => $name,
                'content' => $request->content,
                'slug' => \Str::slug($request->product_name)
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $imageProducts = public_path('image_posts/').$product->image;
        if(file_exists($imageProducts))
        {
            if($product->image !== 'product.jpg')
            {
                @unlink($imageProducts);
            }
        }
        $product->delete();
    }
}
