<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('admin.profile.index');
    }

    public function update(Request $request, $id)
    {
    	$user = User::find($id);

    	$this->validate($request, [
    		'name' => 'required',
	        'username' => 'required|unique:users,username,'.$id,
	        'email' => 'required|unique:users,email,'.$id,
	        'bio' => 'required'
    	]);

    	try {

            $currentgambar = $user->image;

            if($request->image !== null && $user->image !== 'foto.jpeg')
            {

                if ($request->image != $currentgambar) {

                        $name = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

                        \Image::make($request->image)->save(public_path('image_users/').$name);

                        $imageUsers = public_path('image_users/').$currentgambar;
                        if(file_exists($imageUsers))
                        {
                            @unlink($imageUsers);
                        }
                }else{
                    $name = $currentgambar;
                }

            }else{
                $name = $currentgambar;
            }

            if (\Hash::check($request->password, $user->password)) {
			    $password = \Hash::make($request->password);
			}else{
				$password = $user->password;
			}

            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $password,
                'image' => $name,
                'fb' => $request->fb,
                'ig' => $request->ig,
                'bio' => $request->bio
            ]);
        } catch (Exception $e) {
            return $e;
        }
    }
}
