<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function showAllSkills()
    {
        return response()->json(Skills::with('jobtitle')->get());
    }

    public function showOneSkill($id)
    {
        return response()->json(Skills::with('jobtitle')->find($id));
    }

    public function create(Request $request)
    {
        $skills = Skills::create($request->all());

        return response()->json($skills, 201);
    }

    public function update($id, Request $request)
    {
        $skills = Skills::findOrFail($id);
        $skills->update($request->all());

        return response()->json($skills, 200);


        // $data = $this->validate($request, [
        //     Input::all()
        // ]);

        // $data = Input::all();

        // $skill->fill($data);
        // $skill->save();

        // $userProfile->update($request->all());
        // $factory->define(App\User::class, function (Faker\Generator $faker) {
        //     return [
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //     ];
        // });

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Skills::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
