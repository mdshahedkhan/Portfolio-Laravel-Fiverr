<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

class SiteController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $services = Service::where('status', Service::$ACTIVE_STATUS)->orderBy('title', 'DESC')->get();
        return view('welcome', compact('services'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function Setting()
    {
        return view('Backend.setting.index');
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
            $user        = User::where('id', Auth::user()->id)->first();
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
            //SetMessage('success', '');
            session()->flash('message', 'user has been successfully updated.');
            $response['redirectUrl'] = route('logout');
        } catch (\Exception $exception) {
            $response['status']  = Response::HTTP_BAD_GATEWAY;
            $response['message'] = "Database Error, Please Contact Your Developer";
        }
        return response()->json($response)->setStatusCode(Response::HTTP_OK);
        //return redirect()->action([AuthenticatedSessionController::class, 'destroy'])->with('message', $response['message']);
    }

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
    }
}
