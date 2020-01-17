<?php

namespace App\Http\Controllers;

use App\ShortlistedCandidate;
use Illuminate\Http\Request;

class ShortlistedCandidateController extends Controller
{
    public function showAllShortlistedCandidates()
    {
        return response()->json(ShortlistedCandidate::all());
    }

    public function showOneShortlistedCandidate($id)
    {
        return response()->json(ShortlistedCandidate::find($id));
    }

    public function create(Request $request)
    {
        $shortlistedcandidate = ShortlistedCandidate::create($request->all());

        return response()->json($shortlistedcandidate, 201);
    }

    public function update($id, Request $request)
    {
        $shortlistedcandidate = ShortlistedCandidate::findOrFail($id);
        $shortlistedcandidate->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        ShortlistedCandidate::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
