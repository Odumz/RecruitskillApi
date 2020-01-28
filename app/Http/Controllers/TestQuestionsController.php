<?php

namespace App\Http\Controllers;

use App\TestQuestions;

use Illuminate\Http\Request;

class TestQuestionsController extends Controller
{
    public function showAllTestQuestions()
    {
        return response()->json(TestQuestions::all());
    }

    public function showOneTestQuestion($id)
    {
        return response()->json(TestQuestions::find($id));
    }

    public function create(Request $request)
    {
        $testQuestions = TestQuestions::create($request->all());

        return response()->json($testQuestions, 201);
    }

    public function update($id, Request $request)
    {
        $testQuestions = TestQuestions::findOrFail($id);

        $testQuestions->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        TestQuestions::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
