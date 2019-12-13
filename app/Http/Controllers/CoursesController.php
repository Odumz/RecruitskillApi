<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function showAllCourses()
    {
        return response()->json(Courses::all());
    }

    public function showOneCourse($id)
    {
        return response()->json(Courses::find($id));
    }

    public function create(Request $request)
    {
        $courses = Courses::create($request->all());

        return response()->json($courses, 201);
    }

    public function update($id, Request $request)
    {
        $courses = Courses::findOrFail($id);
        $courses->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Courses::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
