<?php

namespace App\Http\Controllers;

use App\Positions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    public function showAllPositions()
    {
        return response()->json(Positions::all());
    }

    public function showOnePosition($id)
    {
        return response()->json(Positions::find($id));
    }

    public function create(Request $request)
    {
        $postions = Positions::create($request->all());

        return response()->json($postions, 201);
    }

    public function update($id, Request $request)
    {
        $postions = Positions::findOrFail($id);
        $postions->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Positions::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
