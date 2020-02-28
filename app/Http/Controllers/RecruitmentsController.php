<?php

namespace App\Http\Controllers;

use App\OngoingRecruitment;
use App\PublishedRecruitment;
use App\Recruitments;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RecruitmentsController extends Controller
{
    public function showAllRecruitments()
    {
        return response()->json(Recruitments::with('user')->get());
    }

    public function showOneRecruitment($id)
    {
        return response()->json(Recruitments::with('user')->find($id));
    }

    public function create(Request $request)
    {
        // Log::info('Showing user profile for user: '.$request);
        $recruitments = Recruitments::create($request->all());

        // $recruitment_id = $recruitments->id();
        // $publishedRecruitment = PublishedRecruitment::create();
        // $ongoingRecruitment = OngoingRecruitment::create();

        // dd($recruitments);

        return response()->json($recruitments, 201);
    }

    public function update($id, Request $request)
    {
        $recruitments = Recruitments::findOrFail($id);
        $recruitments->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Recruitments::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function showAllConcludedRecruitmentFromRecruitment($recruitment_id)
    {
        try {
            $recruitment = Recruitments::find($recruitment_id);
        } catch(ModelNotFoundException $e) {
            return response ('recruitment not found', 404);
            }
            $concludedRecruitment = $recruitment->concludedRecruitment;
            return response()->json($concludedRecruitment, 200);
    }

    public function showAllPublishedRecruitmentFromRecruitment($recruitment_id)
    {
        try {
            $recruitment = Recruitments::find($recruitment_id);
        } catch(ModelNotFoundException $e) {
            return response ('recruitment not found', 404);
            }
            $publishedRecruitment = $recruitment->publishedRecruitment;
            return response()->json($publishedRecruitment, 200);
    }

    public function showAllOngoingRecruitmentFromRecruitment($recruitment_id)
    {
        try {
            $recruitment = Recruitments::find($recruitment_id);
        } catch(ModelNotFoundException $e) {
            return response ('recruitment not found', 404);
            }
            $ongoingRecruitment = $recruitment->ongoingRecruitment;
            return response()->json($ongoingRecruitment, 200);
    }


    public function showUserPublishedRecruitment(Request $request, $users_id)
    {
        $recruitment = Recruitments::find($users_id);
        $publishedrecruitment = PublishedRecruitment::whereIn('users_id', $users_id);
        // $publishedrecruitment = $recruitment-> ;
        return response()->json($publishedrecruitment, 200);
    }

    // public function showAllCitiesFromState($state_id)
    // {
    //     $state = State::find($state_id);
    //     $cities = $state->cities;
    //     return response()->json($cities, 200);
    // }
}
