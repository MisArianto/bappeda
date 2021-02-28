<?php

namespace App\Http\Controllers\User;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.foto.index');
    }

    public function fetch()
    {
        $fotos = Foto::latest()->get();

        return response()->json([
            'message' => 'list data fotos',
            'fotos' => $fotos
        ], 200);
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
            'name' => 'required|unique:fotos',
            'image' => 'required'
        ]);

        try {
            if($request->has('image'))
            {
                $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                \Image::make($request->image)->save(public_path('image_foto/').$name);

            }

            Foto::create([
                'uuid' => (string) Str::uuid(),
                'name' => $request->name,
                'image' => $name ? $name : 'image.jpg',
                'slug' => \Str::slug($request->name)
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show(Foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foto = Foto::find($id);

        $this->validate($request, [
            'name' => 'required|unique:fotos,name,'.$id,
        ]);


        try {

            $currentgambar = $foto->image;


            if($request->image !== null && $foto->image !== 'foto.jpeg')
            {

                if ($request->image != $currentgambar) {

                        $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                        \Image::make($request->image)->save(public_path('image_foto/').$name);

                        $imageFoto = public_path('image_foto/').$currentgambar;
                        if(file_exists($imageFoto))
                        {
                            @unlink($imageFoto);
                        }
                }else{
                    $name = $currentgambar;
                }

            }else{
                $name = $currentgambar;
            }

            $foto->update([
                'name' => $request->name,
                'image' => $name ? $name : 'image.jpg',
                'slug' => \Str::slug($request->name)
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = Foto::findOrFail($id);
        $imageFoto = public_path('image_foto/').$foto->image;
        if(file_exists($imageFoto))
        {
            if($foto->image !== 'foto.jpg')
            {
                @unlink($imageFoto);
            }
        }
        $foto->delete();
    }
}
