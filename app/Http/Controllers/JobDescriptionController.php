<?php

namespace App\Http\Controllers;

use App\JobDescription;
use Illuminate\Http\Request;

class JobDescriptionController extends Controller
{
    public function showAllJobDescriptions()
    {
        return response()->json(JobDescription::all());
    }

    public function showOneJobDescription($id)
    {
        return response()->json(JobDescription::find($id));
    }

    public function create(Request $request)
    {
        $jobDescription = JobDescription::create($request->all());

        return response()->json($jobDescription, 201);
    }

    public function update($id, Request $request)
    {
        $jobDescription = JobDescription::findOrFail($id);

        $jobDescription->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        JobDescription::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
