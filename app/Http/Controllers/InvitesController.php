<?php

namespace App\Http\Controllers;

use App\Invites;
use Illuminate\Http\Request;

class InvitesController extends Controller
{
    public function showAllInvites()
    {
        return response()->json(Invites::all());
    }

    public function showOneInvite($id)
    {
        return response()->json(Invites::find($id));
    }

    public function create(Request $request)
    {
        $userTest = Invites::create($request->all());

        return response()->json($userTest, 201);
    }

    public function update($id, Request $request)
    {
        $userTest = Invites::findOrFail($id);
        $userTest->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Invites::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
