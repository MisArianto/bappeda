<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Master\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master.levels.index');
    }

    public function fetch()
    {
        $levels = Level::latest()->get();

        return response()->json([
            'message' => 'list data levels',
            'levels' => $levels
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
            'id_role' => 'required|unique:levels,id_role',
            'nama_level' => 'required|unique:levels,nama_level'
        ]);

        try {
            Level::create([
                'id_role' => $request->id_role,
                'nama_level' => $request->nama_level
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_role' => 'required|unique:levels,id_role,'.$id,
            'nama_level' => 'required|unique:levels,nama_level,'.$id
        ]);

        try {
            $level = Level::find($id);
            $level->update([
                'id_role' => $request->id_role,
                'nama_level' => $request->nama_level
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $level = Level::find($id);
        $level->delete();
    }
}
