<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Master\Sumber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master.sumber.index');
    }

    public function fetch()
    {
        $sumbers = Sumber::latest()->get();

        return response()->json([
            'message' => 'list data sumbers',
            'sumbers' => $sumbers
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
            'sumber' => 'required|unique:sumbers,name'
        ]);

        try {
            Sumber::create([
                'name' => $request->sumber
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sumber  $sumber
     * @return \Illuminate\Http\Response
     */
    public function show(Sumber $sumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sumber  $sumber
     * @return \Illuminate\Http\Response
     */
    public function edit(Sumber $sumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sumber  $sumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'sumber' => 'required|unique:sumbers,name,'.$id
        ]);

        try {
            $sumber = Sumber::find($id);
            $sumber->update([
                'name' => $request->sumber
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sumber  $sumber
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sumber = Sumber::find($id);
        $sumber->delete();
    }
}
