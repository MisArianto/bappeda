<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Master\PicDokumen as PIC;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PicDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master.pic.index');
    }

    public function fetch()
    {
        $pics = PIC::latest()->get();

        return response()->json([
            'message' => 'list data pics',
            'pics' => $pics
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
            'pic' => 'required|unique:pic_dokumens,name'
        ]);

        try {
            PIC::create([
                'name' => $request->pic
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PicDokumen  $picDokumen
     * @return \Illuminate\Http\Response
     */
    public function show(PicDokumen $picDokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PicDokumen  $picDokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(PicDokumen $picDokumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PicDokumen  $picDokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pic' => 'required|unique:pic_dokumens,name,'.$id
        ]);

        try {
            $pic = PIC::find($id);
            $pic->update([
                'name' => $request->pic
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PicDokumen  $picDokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = PIC::find($id);
        $model->delete();
    }
}
