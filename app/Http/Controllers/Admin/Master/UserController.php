<?php

namespace App\Http\Controllers\Admin\Master;

use App\User;
use App\Models\Master\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(20);
        $levels = Level::latest()->get();
        return view('admin.master.users.index', compact('users', 'levels'))->with('no', 1);
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
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'level' => 'required',
            'fb' => 'required',
            'ig' => 'required'
        ]);

        try{

            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password ? \Hash::make($request->password) : \Hash::make('12345678'),
                'email' => $request->email,
                'level' => $request->level,
                'fb' => $request->fb,
                'ig' => $request->ig
            ]);


        }catch(Exception $e)
        {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username,'.$id,
            'email' => 'required|unique:users,email,'.$id,
            'level' => 'required',
            'fb' => 'required',
            'ig' => 'required'
        ]);

        try{

            $user = User::find($id);
            $user->create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password ? \Hash::make($request->password) : \Hash::make('12345678'),
                'email' => $request->email,
                'level' => $request->level,
                'fb' => $request->fb,
                'ig' => $request->ig
            ]);


        }catch(Exception $e)
        {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
