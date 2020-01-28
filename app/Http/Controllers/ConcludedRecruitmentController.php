<?php

namespace App\Http\Controllers;

use App\ConcludedRecruitment;
use App\Recruitments;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ConcludedRecruitmentController extends Controller
{
    public function showAllConcludedRecruitments()
    {
        return response()->json(ConcludedRecruitment::with('recruitment')->get());
    }

    public function showOneConcludedRecruitment($id)
    {
        return response()->json(ConcludedRecruitment::with('recruitment')->find($id));
    }

    public function create(Request $request)
    {
        $concludedrecruitment = ConcludedRecruitment::create($request->all());

        return response()->json($concludedrecruitment, 201);
    }

    public function update($id, Request $request)
    {
        $concludedrecruitment = ConcludedRecruitment::findOrFail($id);
        $concludedrecruitment->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        ConcludedRecruitment::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
