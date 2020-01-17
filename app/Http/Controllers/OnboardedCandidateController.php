<?php

namespace App\Http\Controllers;

use App\OnboardedCandidate;
use Illuminate\Http\Request;

class OnboardedCandidateController extends Controller
{
    public function showAllOnboardedCandidates()
    {
        return response()->json(OnboardedCandidate::all());
    }

    public function showOneOnboardedCandidate($id)
    {
        return response()->json(OnboardedCandidate::find($id));
    }

    public function create(Request $request)
    {
        $onboardedcandidate = OnboardedCandidate::create($request->all());

        return response()->json($onboardedcandidate, 201);
    }

    public function update($id, Request $request)
    {
        $onboardedcandidate = OnboardedCandidate::findOrFail($id);
        $onboardedcandidate->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        OnboardedCandidate::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
