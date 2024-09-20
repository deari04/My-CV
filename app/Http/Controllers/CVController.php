<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function show() {
        $data = biodata::all();
        $education = Education::all();
        $experience = Experience::all();
        $skill = Skill::all();
        return view('show', compact('data', 'education', 'experience', 'skill'));
    }
}
