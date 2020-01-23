<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function showAllCountries()
    {
        return response()->json(Country::all());
    }

    public function showOneCountry($id)
    {
        return response()->json(Country::find($id));
    }

    public function create(Request $request)
    {
        $country = Country::create($request->all());

        return response()->json($country, 201);
    }

    public function update($id, Request $request)
    {
        $country = Country::findOrFail($id);
        $country->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Country::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function showAllStatesFromCountry($country_id)
    {
        $country = Country::find($country_id);
        $states = $country->states;
        return response()->json($states, 200);
    }

}
