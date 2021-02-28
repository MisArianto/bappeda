<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Master\Versi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VersiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master.versi.index');
    }

    public function fetch()
    {
        $versis = Versi::latest()->get();

        return response()->json([
            'message' => 'list data versis',
            'versis' => $versis
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
            'versi' => 'required|unique:versis,name'
        ]);

        try {
            Versi::create([
                'name' => $request->versi
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Versi  $versi
     * @return \Illuminate\Http\Response
     */
    public function show(Versi $versi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Versi  $versi
     * @return \Illuminate\Http\Response
     */
    public function edit(Versi $versi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Versi  $versi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'versi' => 'required|unique:versis,name,'.$id
        ]);

        try {
            $versi = Versi::find($id);
            $versi->update([
                'name' => $request->versi
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Versi  $versi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $versi = Versi::find($id);
        $versi->delete();
    }
}
