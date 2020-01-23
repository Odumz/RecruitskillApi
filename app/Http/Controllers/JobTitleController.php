<?php

namespace App\Http\Controllers;

use App\JobTitle;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    public function showAllJobTitles()
    {
        return response()->json(JobTitle::all());
    }

    public function showOneJobTitle($id)
    {
        return response()->json(JobTitle::find($id));
    }

    public function create(Request $request)
    {
        $jobTitle = JobTitle::create($request->all());

        return response()->json($jobTitle, 201);
    }

    public function update($id, Request $request)
    {
        $jobTitle = JobTitle::findOrFail($id);

        $jobTitle->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        JobTitle::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function showAllSkillsFromJobTitle($job_title_id)
    {
        $job_title = JobTitle::find($job_title_id);
        $skills = $job_title->skills;
        return response()->json($skills, 200);
    }
}
