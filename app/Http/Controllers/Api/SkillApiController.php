<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfessionResource;
use App\Models\Profession;
use Illuminate\Http\Request;


class SkillApiController extends Controller
{

    public function show(Request $request)
    {
        $skills = $request->all();


        foreach($skills as $skill) {

            $profession = Profession::whereHas('skills', function($query) use ($skill){
                $query->where('title', $skill);
            })->first();

            return new ProfessionResource($profession);

        }

    }

}
