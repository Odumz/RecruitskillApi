<?php

namespace App\Http\Controllers;

use App\OngoingRecruitment;
use Illuminate\Http\Request;

class OngoingRecruitmentController extends Controller
{
    public function showAllOngoingRecruitments()
    {
        return response()->json(OngoingRecruitment::with('recruitment')->get());
    }

    public function showOneOngoingRecruitment($id)
    {
        return response()->json(OngoingRecruitment::with('recruitment')->find($id));
    }

    public function create(Request $request)
    {
        $ongoingrecruitment = OngoingRecruitment::create($request->all());

        return response()->json($ongoingrecruitment, 201);
    }

    public function update($id, Request $request)
    {
        $ongoingrecruitment = OngoingRecruitment::findOrFail($id);
        $ongoingrecruitment->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        OngoingRecruitment::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
