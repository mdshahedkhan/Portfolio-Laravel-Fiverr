<?php

namespace App\Http\Controllers;

use Image;
use App\Models\User;
use App\Models\Brand;
use App\Models\AboutMe;
use App\Models\Service;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

class SiteController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $services     = Service::where('status', Service::$ACTIVE_STATUS)->orderBy('title', 'DESC')->get();
        $GeneralTITLE = GeneralSetting::where('id', 1)->first();
        $brands       = Brand::where('status', Brand::ACTIVE_BRAND)->latest()->get();
        $AboutMe      = AboutMe::where('id', 1)->first();
        return view('welcome', compact('services', 'GeneralTITLE', 'brands', 'AboutMe'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function Setting()
    {
        $GeneralSetting = GeneralSetting::where('id', 1)->first();
        return view('Backend.setting.index', compact('GeneralSetting'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function userInfoUpdate(Request $request)
    {
        $request->validate([
            'name'             => 'required|min:4|max:30|unique:users,id,' . Auth::user()->id,
            'email'            => 'required|unique:users,id,' . Auth::user()->id,
            'current_password' => 'nullable',
            'new_password'     => 'nullable|same:confirm_password'
        ]);
        $response['status'] = Response::HTTP_OK;
        try {
            $user = User::where('id', Auth::user()->id)->first();
            if ($request->hasFile('image')) {
                $TempImg = $request->file('image');
                if ($TempImg->getMimeType() === "image/jpeg" or $TempImg->getMimeType() === "image/png") {
                    if (file_exists(public_path('Upload/Profile/' . $user->image))) {
                        unlink(public_path('Upload/Profile/' . $user->image));
                    }
                    $image       = date('Ymdis') . uniqid() . '.' . $TempImg->getClientOriginalExtension();
                    $user->image = $image;
                    Image::make($TempImg)->resize(300, 300)->save('Upload/Profile/' . $image);
                }
            }
            $user->name  = $request->name;
            $user->email = $request->email;
            if ($request->current_password !== null) {
                if (Hash::check($request->current_password, $user->password)) {
                    $user->password = Hash::make($request->new_password);
                } else {
                    $response['status']  = Response::HTTP_BAD_REQUEST;
                    $response['message'] = "Does not match current password";
                }
            }
            $user->save();
            $response['message'] = 'Yah User has been successfully updated.';
            $logout              = new AuthenticatedSessionController();
            $logout->destroy($request);
            session()->flash('message', 'user has been successfully updated.');
            $response['redirectUrl'] = route('logout');
        } catch (\Exception $exception) {
            $response['status']  = Response::HTTP_BAD_GATEWAY;
            $response['message'] = "Database Error, Please Contact Your Developer";
        }
        return response()->json($response)->setStatusCode(Response::HTTP_OK);
        //return redirect()->action([AuthenticatedSessionController::class, 'destroy'])->with('message', $response['message']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function UpdateGeneralSetting(Request $request)
    {
        $request->validate([
            'title'            => 'required|min:6',
            'site_prefix'      => 'required|min:6',
            'meta_description' => 'nullable|min:10',
            'meta_keywords'    => 'nullable|min:10',
            'meta_author'      => 'nullable|min:5',
            'contact_email'    => 'nullable|email',
        ]);
        $response['status'] = Response::HTTP_OK;
        try {
            $GeneralSetting = GeneralSetting::where('id', 1)->first();
            if ($request->hasFile('logo')) {
                $TempImg = $request->file('logo');
                if ($TempImg->getMimeType() === 'image/jpeg' or $TempImg->getMimeType() === "image/png") {
                    if (file_exists(public_path('Upload/General/' . $GeneralSetting->logo))) {
                        unlink(public_path('Upload/General/' . $GeneralSetting->logo));
                    }
                    $logo                 = date('Ymdis') . uniqid() . '.' . $TempImg->getClientOriginalExtension();
                    $GeneralSetting->logo = $logo;
                    Image::make($TempImg)->resize(100, 100)->save('Upload/General/' . $logo);
                }
            }
            $GeneralSetting->title            = $request->title;
            $GeneralSetting->prefix           = $request->site_prefix;
            $GeneralSetting->meta_description = $request->meta_description;
            $GeneralSetting->meta_keyword     = $request->meta_keywords;
            $GeneralSetting->meta_author      = $request->meta_author;
            $GeneralSetting->email            = $request->contact_email;
            $GeneralSetting->save();
            $response['message'] = "Yah! General Setting has been successfully updated.";
        } catch (\Exception $exception) {
            $response['status']  = Response::HTTP_BAD_REQUEST;
            $response['message'] = "Database Error, Please Contact Your Developer.";
        }
        return response()->json($response);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function AboutMe()
    {
        $AboutMe      = AboutMe::where('id', '1')->first();
        $GeneralTITLE = GeneralSetting::where('id', 1)->first();
        return view("Frontend.AboutMe", compact('AboutMe', 'GeneralTITLE'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function ContactUs()
    {
        $GeneralTITLE = GeneralSetting::where('id', 1)->first();
        return view('Frontend.contact', compact('GeneralTITLE'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|object
     */

    public function contact(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'email'        => 'required|email|min:10',
            'subject'      => 'required|min:6',
            'message'      => 'required|min:20',
            'phone_number' => 'required'
        ]);
        $response['status']   = Response::HTTP_OK;
        $response['KeyIndex'] = $request->all();
        try {
            \App\Models\ContactMail::create([
                'name'         => $request->name,
                'email'        => $request->email,
                'subject'      => $request->subject,
                'message'      => $request->message,
                'phone_number' => $request->phone_number
            ]);
            Mail::to($request->email)->send(new ContactMail($request->all()));
            $response['message'] = 'Yah! your email has been successfully send.';
            //SetMessage('success', 'Yah! your email has been successfully send.');
        } catch (\Exception $exception) {
            $response['status']  = Response::HTTP_BAD_REQUEST;
            $response["message"] = "Please Contact Your Developer.";
        }
        return response()->json($response)->setStatusCode(Response::HTTP_OK);
    }
}
