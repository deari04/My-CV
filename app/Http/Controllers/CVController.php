<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Education;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function show() {
        $data = biodata::all();
        $education = Education::all();
        return view('show', compact('data', 'education'));
    }
}
