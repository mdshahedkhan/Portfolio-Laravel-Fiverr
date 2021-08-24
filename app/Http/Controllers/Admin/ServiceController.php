<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        return view('Backend.service.index');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'title'        => 'required|min:6|max:40',
                'sub_title'    => 'required|min:6|max:80',
                'status'       => 'required',
                'service_icon' => 'required'
            ]);
            $service_icon = $request->file('service_icon');
            if ($service_icon->getClientMimeType() === 'image/jpeg') {
                if ($service_icon->isFile()) {
                    try {
                        $IconName = date('Ymdhis') . uniqid() . '.' . $service_icon->getClientOriginalExtension();
                        $Service  = Service::create([
                            'create_by' => Auth::user()->id,
                            'title'     => $request->title,
                            'sub_title' => $request->sub_title,
                            'status'    => $request->status,
                            'image'     => $IconName,
                        ]);
                        if ($Service){
                            Image::make($service_icon)->resize('390', '390')->save('Upload/ServiceIcon/'.$IconName);
                            SetMessage('success', 'Yah! your service has been successfully created.');
                            return redirect()->back();
                        }
                    } catch (\Exception $exception) {
                        SetMessage('warning', 'Database Error, Please Contact you Developer');
                        return redirect()->back();
                    }
                } else {
                    SetMessage('danger', 'Invalid file, please insert valid file.');
                    return redirect()->back();
                }
            } else {
                SetMessage('danger', 'Invalid file, please insert valid file.');
                return redirect()->back();
            }
        }
        return view('Backend.service.create');
    }
}
