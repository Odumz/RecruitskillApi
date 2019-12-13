<?php

namespace App\Http\Controllers;

use App\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function showAllIndustries()
    {
        return response()->json(Industry::all());
    }

    public function showOneIndustry($id)
    {
        return response()->json(Industry::find($id));
    }

    public function create(Request $request)
    {
        $industry = Industry::create($request->all());

        return response()->json($industry, 201);
    }

    public function update($id, Request $request)
    {
        $industry = Industry::findOrFail($id);
        $industry->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Industry::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
