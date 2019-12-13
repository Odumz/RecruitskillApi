<?php

namespace App\Http\Controllers;

use App\SkillsTest;
use Illuminate\Http\Request;

class SkillsTestController extends Controller
{
    public function showAllSkillsTests()
    {
        return response()->json(SkillsTest::all());
    }

    public function showOneSkillsTest($id)
    {
        return response()->json(SkillsTest::find($id));
    }

    public function create(Request $request)
    {
        $skillsTest = SkillsTest::create($request->all());

        return response()->json($skillsTest, 201);
    }

    public function update($id, Request $request)
    {
        $skillsTest = SkillsTest::findOrFail($id);
        $skillsTest->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        SkillsTest::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
