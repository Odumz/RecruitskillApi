<?php

namespace App\Http\Controllers;

use App\SkillTestScore;

use Illuminate\Http\Request;

class SkillTestScoreController extends Controller
{
    public function showAllSkillTestScores()
    {
        return response()->json(SkillTestScore::all());
    }

    public function showOneSkillTestScore($id)
    {
        return response()->json(SkillTestScore::find($id));
    }

    public function create(Request $request)
    {
        $skillTestScore = SkillTestScore::create($request->all());

        return response()->json($skillTestScore, 201);
    }

    public function update($id, Request $request)
    {
        $skillTestScore = SkillTestScore::findOrFail($id);

        $skillTestScore->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        SkillTestScore::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
