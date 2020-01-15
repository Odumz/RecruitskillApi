<?php

namespace App\Http\Controllers;

use App\SkillsTestType;
use Illuminate\Http\Request;

class SkillsTestTypeController extends Controller
{
    public function showAllSkillsTestTypes()
    {
        return response()->json(SkillsTestType::all());
    }

    public function showOneSkillsTestType($id)
    {
        return response()->json(SkillsTestType::find($id));
    }

    public function create(Request $request)
    {
        $skillsTestType = SkillsTestType::create($request->all());

        return response()->json($skillsTestType, 201);
    }

    public function update($id, Request $request)
    {
        $skillsTestType = SkillsTestType::findOrFail($id);
        $skillsTestType->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        SkillsTestType::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
