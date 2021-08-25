<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $services = Service::where('status', Service::$ACTIVE_STATUS)->orderBy('title', 'DESC')->get();
        return view('welcome', compact('services'));
    }

    public function Setting(){
        return view('Backend.setting.index');
    }
}
