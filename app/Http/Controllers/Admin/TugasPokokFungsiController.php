<?php

namespace App\Http\Controllers\Admin;

use App\Models\TugasPokokFungsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TugasPokokFungsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = TugasPokokFungsi::get()[0];
        return view('admin.tugas_pokok.index', compact('model'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TugasPokokFungsi  $tugasPokokFungsi
     * @return \Illuminate\Http\Response
     */
    public function show(TugasPokokFungsi $tugasPokokFungsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TugasPokokFungsi  $tugasPokokFungsi
     * @return \Illuminate\Http\Response
     */
    public function edit(TugasPokokFungsi $tugasPokokFungsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TugasPokokFungsi  $tugasPokokFungsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tugas = TugasPokokFungsi::findOrFail($id);

        $this->validate($request, [
            'content' => 'required',
        ]);

        try {
            $tugas->update([
                'content' => $request->content
            ]);

            return redirect('admin/tugas-fungsi')->with('success', 'Update Success!');
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TugasPokokFungsi  $tugasPokokFungsi
     * @return \Illuminate\Http\Response
     */
    public function destroy(TugasPokokFungsi $tugasPokokFungsi)
    {
        //
    }
}
