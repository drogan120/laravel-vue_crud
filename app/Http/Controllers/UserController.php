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
        dd($request);
    }

    public function destroy($id){
        $user =  User::destroy($id);
        return response()->json($user);
    }
}
