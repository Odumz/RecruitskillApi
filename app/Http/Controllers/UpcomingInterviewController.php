<?php

namespace App\Http\Controllers;

use App\UpcomingInterview;
use Illuminate\Http\Request;

class UpcomingInterviewController extends Controller
{
    public function showAllUpcomingInterviews()
    {
        return response()->json(UpcomingInterview::all());
    }

    public function showOneUpcomingInterview($id)
    {
        return response()->json(UpcomingInterview::find($id));
    }

    public function create(Request $request)
    {
        $upcominginterview = UpcomingInterview::create($request->all());

        return response()->json($upcominginterview, 201);
    }

    public function update($id, Request $request)
    {
        $upcominginterview = UpcomingInterview::findOrFail($id);
        $upcominginterview->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        UpcomingInterview::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
