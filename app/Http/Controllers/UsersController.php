<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Hashing\BcryptHasher;

class UsersController extends Controller
{
    //create new user
	public function add(Request $request){

        $request['api_token'] = Str::random(60);
        $request['password'] = app('hash')->make($request['password']);
    	$user = User::create($request->all());

    	return response()->json($user);

	}

 //updates user
	public function edit(Request $request, $id){
    	$user  = User::find($id);
    	$user->update($request->all());

    	return response()->json($user);
	}
//view user
    public function view($id){
        $user  = User::find($id);


        return response()->json($user);
    }
//delete user
	public function delete($id){
    	$user  = User::find($id);
    	$user->delete();

    	return response()->json('Removed successfully.');
	}
//list user
	public function index(){

    	$user  = User::all();

    	return response()->json($user);

	}
}
