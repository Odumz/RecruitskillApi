<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function showAllCities()
    {
        return response()->json(City::all());
    }

    public function showOneCity($id)
    {
        return response()->json(City::find($id));
    }

    public function create(Request $request)
    {
        $city = City::create($request->all());

        return response()->json($city, 201);
    }

    public function update($id, Request $request)
    {
        $city = City::findOrFail($id);
        $city->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        City::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
