<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Master\KeteranganDoc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeteranganDocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.master.keterangan.index');
    }

    public function fetch()
    {
        $docs = KeteranganDoc::latest()->get();

        return response()->json([
            'message' => 'list data docs',
            'docs' => $docs
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
            'name' => 'required|unique:keterangan_docs,name'
        ]);

        try {
            KeteranganDoc::create([
                'name' => $request->name
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KeteranganDoc  $keteranganDoc
     * @return \Illuminate\Http\Response
     */
    public function show(KeteranganDoc $keteranganDoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KeteranganDoc  $keteranganDoc
     * @return \Illuminate\Http\Response
     */
    public function edit(KeteranganDoc $keteranganDoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KeteranganDoc  $keteranganDoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:keterangan_docs,name,'.$id
        ]);

        try {
            $model = KeteranganDoc::find($id);
            $model->update([
                'name' => $request->name
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KeteranganDoc  $keteranganDoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = KeteranganDoc::find($id);
        $model->delete();
    }
}
