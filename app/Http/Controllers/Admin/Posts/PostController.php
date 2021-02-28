<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Post;
use App\Models\Master\Tag;
use Illuminate\Support\Str;
use App\Models\Master\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        $posts = Post::latest()->paginate(20);
        return view('admin.posts.post.index', compact('categories', 'posts', 'tags'));
    }


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
            'category_id' => 'required',
            'judul' => 'required|unique:posts,judul',
            'image' => 'required',
            'content' => 'required',
        ]);

        try {
            if($request->has('image'))
            {
                $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                \Image::make($request->image)->save(public_path('image_posts/').$name);
                // $file = $request->file('image');
                // $tujuan_upload = 'posts_image';
                // $name = time().$file->getClientOriginalExtension();
                // $file->move($tujuan_upload,$name);

            }

            $post = Post::create([
                'uuid' => (string) Str::uuid(),
                'user_id' => Auth()->user()->id,
                'category_id' => $request->category_id,
                'judul' => $request->judul,
                'image' => $name ? $name : 'image.jpg',
                'content' => $request->content,
                'tag' => json_encode($request->tag),
                'slug' => \Str::slug($request->judul)
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminPostsPostController  $adminPostsPostController
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminPostsPostController  $adminPostsPostController
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminPostsPostController  $adminPostsPostController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->validate($request, [
            'tag' => 'required',
            'category_id' => 'required',
            'judul' => 'required',
            'content' => 'required',
        ]);

        try {

            $currentgambar = $post->image;

            if($request->image !== null)
            {

                if ($request->image != $currentgambar) {

                        $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                        \Image::make($request->image)->save(public_path('image_posts/').$name);

                        $imagePosts = public_path('image_posts/').$currentgambar;
                        if(file_exists($imagePosts))
                        {
                            @unlink($imagePosts);
                        }
                }else{
                    $name = $currentgambar;
                }

            }else{
                $name = $currentgambar;
            }
            // $current = $post->image; 

            // if($request->image === $current)
            // {
            //     $file = $request->file('image');
            //     $tujuan_upload = 'posts_image';
            //     $name = time().$file->getClientOriginalExtension();
            //     \File::delete('posts_image/'.$current);
            //     $file->move($tujuan_upload,$name);
            // }

            $post->update([
                'uuid' => (string) Str::uuid(),
                'user_id' => Auth()->user()->id,
                'category_id' => $request->category_id,
                'judul' => $request->judul,
                'image' => $name,
                'content' => $request->content,
                'tag' => json_encode($request->tag),
                'slug' => \Str::slug($request->judul)
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminPostsPostController  $adminPostsPostController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $imagePosts = public_path('image_posts/').$post->image;
        if(file_exists($imagePosts))
        {
            if($post->imagge !== 'image.jpg')
            {
                @unlink($imagePosts);
            }
        }
        $post->delete();
    }
}
