<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('user')->orderBy('id', 'DESC')->get();
        return view('Backend.service.index', compact('services'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'title'        => 'required|min:6|max:40|unique:services',
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
                        if ($Service) {
                            Image::make($service_icon)->resize('390', '390')->save('Upload/ServiceIcon/' . $IconName);
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

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function destroy($id)
    {
        $id = base64_decode($id);
        try {

            $service = Service::where('id', $id)->first();
            if ($service) {
                if (file_exists(public_path('Upload/ServiceIcon/' . $service->image))) {
                    unlink(public_path('Upload/ServiceIcon/' . $service->image));
                }
                if ($service->delete()) {
                    SetMessage('success', 'Yah! your service has been successfully deleted.');
                    return redirect()->back();
                }
            } else {
                SetMessage('warning', 'Recode Not Found..');
                return redirect()->back();
            }
        } catch (\Exception $exception) {
            SetMessage('warning', 'Database Error, Please contact your developer.');
            return redirect()->back();
        }
    }

    public function ChangeStatus($id, $status)
    {
        if (request()->ajax()) {
            $service         = Service::where('id', base64_decode($id))->first();
            $service->status = $status;
            $service->save();
            return response()->json(['message' => 'Operation Successfully dane.', 'status' => '200', 'statusCode' => Response::HTTP_OK]);
        }
    }

    /**
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request, $id)
    {
        $id      = base64_decode($id);
        $service = Service::where('id', $id)->first();
        if ($request->isMethod('PATCH')) {
            $request->validate([
                'title'        => 'required|min:6|max:40|unique:services,id,' . $id,
                'sub_title'    => 'required|min:6|max:80',
                'status'       => 'required',
            ]);
            try {
                if ($request->hasFile('service_icon')) {
                    $TempIcon = $request->file('service_icon');
                    if ($TempIcon->isValid()) {
                        if ($TempIcon->getMimeType() === "image/jpeg" || $TempIcon->getMimeType() === 'image/png') {
                            if (file_exists(public_path('Upload/ServiceIcon/' . $service->image))) {
                                unlink(public_path('Upload/ServiceIcon/' . $service->image));
                            }
                            $Icon = date('Ymdhis') . uniqid() . '.' . $TempIcon->getClientOriginalExtension();
                            Image::make($TempIcon)->resize('390', '390')->save('Upload/ServiceIcon/' . $Icon);
                            $service->image = $Icon;
                        } else {
                            SetMessage('danger', 'Invalid File');
                            return redirect()->back();
                        }
                    } else {
                        SetMessage('danger', 'Invalid File');
                        return redirect()->back();
                    }
                }
                $service->create_by = Auth::user()->id;
                $service->title     = $request->title;
                $service->sub_title = $request->sub_title;
                $service->status    = $request->status;
                $service->save();
                SetMessage('success', 'Yah! your service has been successfully updated.');
                return redirect()->back();
            } catch (\Exception $exception) {
                SetMessage('warning', 'Database Error, Please Contact Your Developer');
                return redirect()->back();
            }
        }
        $service = Service::where('id', $id)->first();
        return view('Backend.service.edit', compact('service'));
    }

}
