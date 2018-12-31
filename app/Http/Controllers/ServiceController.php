<?php

namespace App\Http\Controllers;

use App\Service;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    public function index()
    {
        $service = service::paginate(6);
        return view('admin/service',compact('service'));
    }

    public function addService(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        //image upload
        $fileName = null;
        if($request->file('image')!=""){
            $image = $request->file('image');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_service/'), $fileName);
        }  
        $service = new service;
        $service->title = $request->title;
        $service->url = $fileName;
        $service->description = $request->description;
        $service->save();
        return response()->json(['message'=>'Successfully Store'],200); 
    }

    public function updateService(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
          ]);

        if($request->image!=""){
            $old_image = "upload_service/".$request->image1;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            //image upload
            $fileName = null;
            if($request->file('image')!=""){
            $image = $request->file('image');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_service/'), $fileName);
            }
        }
        else
        {
            $fileName = $request->image1;
        }

        $service = service::find($request->id);
        $service->title = $request->title;
        $service->url = $fileName;
        $service->description = $request->description;
        $service->save();
        return response()->json(['message'=>'Successfully Update'],200); 
    }

    public function editService($id){
        $service = service::find($id);
        return response()->json($service); 
    }

    public function deleteService($id){
        $service = service::find($id);
        $service->delete(); 
        return response()->json(['message'=>'Successfully Delete'],200); 
    }
}
