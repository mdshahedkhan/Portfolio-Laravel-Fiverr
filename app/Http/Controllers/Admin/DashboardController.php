<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ContactMail = ContactMail::latest()->get();
        $unReadMail  = ContactMail::where('read_as', 'unread')->get();
        return view('dashboard', compact('ContactMail', 'unReadMail'));
    }
}
