<?php

namespace App\Http\Controllers;

use App\Recruitments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RecruitmentsController extends Controller
{
    public function showAllRecruitments()
    {
        return response()->json(Recruitments::all());
    }

    public function showOneRecruitment($id)
    {
        return response()->json(Recruitments::find($id));
    }

    public function create(Request $request)
    {
        Log::info('Showing user profile for user: '.$request);
        $recruitments = Recruitments::create($request->all());

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

    
}
