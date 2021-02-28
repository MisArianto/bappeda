<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Master\KategoriDokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master.kategori_dokumen.index');
    }

    public function fetch()
    {
        $kategoris = KategoriDokumen::latest()->get();

        return response()->json([
            'message' => 'list data kategoris',
            'kategoris' => $kategoris
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
            'kategori' => 'required|unique:kategori_dokumens,name'
        ]);

        try {
            KategoriDokumen::create([
                'name' => $request->kategori
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriDokumen  $kategoriDokumen
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriDokumen $kategoriDokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriDokumen  $kategoriDokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriDokumen $kategoriDokumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriDokumen  $kategoriDokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kategori' => 'required|unique:kategori_dokumens,name,'.$id
        ]);

        try {
            $kategori = KategoriDokumen::find($id);
            $kategori->update([
                'name' => $request->kategori
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriDokumen  $kategoriDokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = KategoriDokumen::find($id);
        $model->delete();
    }
}
