<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
     public function show(){
        $users = User::all();
        return view('users', compact('users'));
    }

    protected function create(Request $request)
    {
        $user = User::create([
            'nickname' => $request->nickname,
            'email' => $request->email,
            'canton_id' => 1,
            'user_type' => $request->user_type,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users');
    }

    public function delete($id)
    {
        $user = User::where('id', $id);
        $user->delete();
        return redirect()->route('users');
        
    }


    public function update(Request $request)
    {

        $user = User::find($request->id);
        $user->nickname = $request->new_nickname;
        $user->email = $request->new_email;
//        $user->canton_id = $request->new_canton_id;ss
        $user->user_type = $request->new_user_type;

        $user->save();

        return redirect()->route('users');
    }
}
