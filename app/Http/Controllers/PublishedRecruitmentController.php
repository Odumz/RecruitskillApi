<?php

namespace App\Http\Controllers;

use App\PublishedRecruitment;
use App\Recruitments;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublishedRecruitmentController extends Controller
{
    public function showAllPublishedRecruitments()
    {
        return response()->json(PublishedRecruitment::with('recruitment')->get());
    }

    public function showOnePublishedRecruitment($id)
    {
        return response()->json(PublishedRecruitment::with('recruitment')->find($id));
    }

    public function create(Request $request)
    {
        $publishedrecruitment = PublishedRecruitment::create($request->all());

        return response()->json($publishedrecruitment, 201);
    }

    public function update($id, Request $request)
    {
        $publishedrecruitment = PublishedRecruitment::findOrFail($id);
        $publishedrecruitment->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        PublishedRecruitment::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

}
