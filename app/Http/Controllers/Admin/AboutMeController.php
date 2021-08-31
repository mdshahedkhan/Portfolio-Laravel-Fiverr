<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $AboutMe = AboutMe::where('id', 1)->orderBy('id', 'DESC')->first();
        return view('Backend.About-me.index', compact('AboutMe'));
    }

    public function UpdateMe($id)
    {
        $id      = base64_decode($id);
        $aboutme = AboutMe::where('id', 1)->first();
        return view('Backend.About-me.create', compact('aboutme'));
    }

    public function UpdateStore(Request $request, $id)
    {
        $id = base64_decode($id);
        $AboutMe = AboutMe::where('id', $id)->first();
        return $AboutMe;
    }
}
