<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function showAllStates()
    {
        return response()->json(State::with('country')->get());
    }

    public function showOneState($id)
    {
        return response()->json(State::with('country')->find($id));
    }

    public function create(Request $request)
    {
        $state = State::create($request->all());

        return response()->json($state, 201);
    }

    public function update($id, Request $request)
    {
        $state = State::findOrFail($id);
        $state->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        State::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function showAllCitiesFromState($state_id)
    {
        $state = State::find($state_id);
        $cities = $state->cities;
        return response()->json($cities, 200);
    }
}
