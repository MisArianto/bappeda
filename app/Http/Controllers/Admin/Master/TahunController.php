<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Master\Tahun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master.tahun.index');
    }

    public function fetch()
    {
        $tahuns = Tahun::latest()->get();

        return response()->json([
            'message' => 'list data tahuns',
            'tahuns' => $tahuns
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
            'tahun' => 'required|unique:tahuns,name'
        ]);

        try {
            Tahun::create([
                'name' => $request->tahun
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function show(Tahun $tahun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function edit(Tahun $tahun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tahun' => 'required|unique:tahuns,name,'.$id
        ]);

        try {
            $tahun = Tahun::find($id);
            $tahun->update([
                'name' => $request->tahun
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tahun = Tahun::find($id);
        $tahun->delete();
    }
}
