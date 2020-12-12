<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function show($id)
    {
        $user =  User::FindorFail($id);
        return response()->json($user);
    }

    public function store(Request $request){

       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->email;
       $user->address = $request->address;
       $user->photo = 'default.jpg';
       $user->save();
        return response()->json($user);
    }

    public function destroy($id){
        $user =  User::destroy($id);
        return response()->json($user);
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email =$request->email;
        $user->address = $request->address;
        $user->save();

        return response()->json($user);
    }
}
