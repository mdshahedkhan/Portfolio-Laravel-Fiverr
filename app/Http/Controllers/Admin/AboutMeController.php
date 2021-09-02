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
        $id      = base64_decode($id);
        $AboutMe = AboutMe::where('id', $id)->first();
        if ($request->hasFile('avatar')) {
            $TempImg = $request->file('avatar');
            if ($TempImg->getMimeType() === 'image/jpeg' || $TempImg->getMimeType() === 'image/png') {
                if (file_exists(public_path('Upload/AboutMe/' . $AboutMe->avatar))) {
                    unlink(public_path('Upload/AboutMe' . $AboutMe->avatar));
                }
                $Avatar          = date('Ymdhis') . uniqid() . '.' . $TempImg->getClientOriginalExtension();
                $AboutMe->avatar = $AboutMe;
                Image::make($TempImg)->resize(330, 330)->save(public_path('Upload/AboutMe/' . $Avatar));
            }
        }
        return $AboutMe;
    }
}
