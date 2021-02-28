<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aplikasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.aplikasi.index');
    }

    public function fetch()
    {
        $aplikasi = Aplikasi::latest()->get();

        return response()->json([
            'aplikasi' => 'list data aplikasi',
            'data' => $aplikasi
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
            'name' => 'required|unique:aplikasis,name',
            'url' => 'required||unique:aplikasis,url',
            'image' => 'required'
        ]);

        try {
            if($request->has('image'))
            {
                $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                \Image::make($request->image)->save(public_path('image_aplikasi/').$name);

            }

            Aplikasi::create([
                'uuid' => (string) Str::uuid(),
                'url' => $request->url,
                'name' => $request->name,
                'image' => $name ? $name : 'image.jpg'
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Aplikasi $aplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aplikasi $aplikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aplikasi = Aplikasi::find($id);

        $this->validate($request, [
            'name' => 'required|unique:aplikasis,name,'.$id,
            'url' => 'required'
        ]);


        try {

            $currentgambar = $aplikasi->image;


            if($request->image !== null && $aplikasi->image !== 'image.png')
            {

                if ($request->image != $currentgambar) {

                        $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                        \Image::make($request->image)->save(public_path('image_aplikasi/').$name);

                        $imageFoto = public_path('image_aplikasi/').$currentgambar;
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

            $aplikasi->update([
                'url' => $request->url,
                'name' => $request->name,
                'image' => $name ? $name : 'image.png'
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Aplikasi::findOrFail($id);
        $model->delete();
    }
}
