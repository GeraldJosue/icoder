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

    

    public function delete($id)
    {
        $user = User::where('id', $id);
        $user->delete();
    }
}
