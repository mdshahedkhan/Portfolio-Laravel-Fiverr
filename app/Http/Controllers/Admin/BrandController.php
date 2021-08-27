<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::with('user')->latest()->get();
        return view('Backend.brand.index', compact('brands'));
    }

    /**
     * @param $id
     * @param $status
     * @return \Illuminate\Http\JsonResponse|void
     */

    public function ChangeStatus($id, $status)
    {
        if (request()->ajax()) {
            $service         = Brand::where('id', base64_decode($id))->first();
            $service->status = $status;
            $service->save();
            return response()->json(['message' => 'Operation Successfully dane.', 'status' => '200', 'statusCode' => Response::HTTP_OK]);
        }
    }

    public function destroy($id)
    {
        $id                 = base64_decode($id);
        $response['status'] = Response::HTTP_OK;
        try {
            $brand = Brand::where('id', $id)->first();
            if ($brand) {
                if (file_exists(public_path('Upload/ServiceIcon/' . $brand->brand_img))) {
                    unlink(public_path('Upload/ServiceIcon/' . $brand->brand_img)) ?? false;
                }
                $brand->delete();
                SetMessage('success', 'Yah! your brand has been successfully deleted.');
                $response['message'] = 'Yah! your brand has been successfully deleted.';
                $response['status']  = 'Yah! your brand has been successfully deleted.';
            } else {
                SetMessage('warning', 'Recode Not Found..');
                $response['message'] = 'Recode Not Found..';
                $response['status']  = Response::HTTP_BAD_GATEWAY;
            }
        } catch (\Exception $exception) {
            SetMessage('warning', 'Database Error, Please contact your developer.');
            $response['message'] = 'Database Error, Please contact your developer.';
            $response['status']  = Response::HTTP_OK;
            return $exception->getMessage();
        }
        return response()->json($response)->setStatusCode(Response::HTTP_OK);
    }


}
