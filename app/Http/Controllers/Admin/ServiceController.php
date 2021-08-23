<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('Backend.service.index');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            return "Method is Post";
        }
        return view('Backend.service.create');
    }
}
