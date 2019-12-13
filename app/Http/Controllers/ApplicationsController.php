<?php

namespace App\Http\Controllers;

use App\Applications;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function showAllApplications()
    {
        return response()->json(Applications::all());
    }

    public function showOneApplication($id)
    {
        return response()->json(Applications::find($id));
    }

    public function create(Request $request)
    {
        $applications = Applications::create($request->all());

        return response()->json($applications, 201);
    }

    public function update($id, Request $request)
    {
        $applications = Applications::findOrFail($id);
        $applications->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Applications::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
