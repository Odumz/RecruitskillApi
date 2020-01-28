<?php

namespace App\Http\Controllers;

use App\UsersProfile;
use Illuminate\Http\Request;

class UsersProfileController extends Controller
{
    //
    public function showAllUsersProfiles()
    {
        return response()->json(UsersProfile::with('user', 'skill', 'invites', 'skilltestscore', 'applications', 'certificates', 'recruitment')->get());
    }

    public function showOneUsersProfile($id)
    {
        return response()->json(UsersProfile::with('user', 'skill', 'invites', 'skilltestscore', 'applications', 'certificates', 'recruitment')->find($id));
    }

    public function create(Request $request)
    {
        $usersProfile = UsersProfile::create($request->all());

        return response()->json($usersProfile, 201);
    }

    public function update($id, Request $request)
    {
        $usersProfile = UsersProfile::findOrFail($id);
        $usersProfile->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        UsersProfile::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
