<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function showAllStates()
    {
        return response()->json(State::all());
    }

    public function showOneState($id)
    {
        return response()->json(State::find($id));
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
}
