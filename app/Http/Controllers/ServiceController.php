<?php

namespace App\Http\Controllers;
use App\Service;
use Storage;
use Validator;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function admin_index()
    {
        $service = Service::orderBy('id', 'DESC')->get();
        return view('english.services.index', compact('service'));
    }

    public function create()
    {
        return view('english.services.create');
    }

    public function service_index()
    {
        $service = Service::orderBy('title', 'ASC')->get();
        return view('english.services.service', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findorfail($id);
        return view('english.services.edit', compact('service'));
    }

    public function service_create(Request $request)
    {
        if($request->service_type == 'Test')
        {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:200',
                'description' => 'required',
                'service_type' => 'required',
                'price' => 'required|numeric',
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:200',
                'description' => 'required',
                'service_type' => 'required',
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]); 
        }

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $service = new Service();
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        if($request->service_type == 'Test')
        {
            $service->test = $request->input('service_type');
            $service->price = $request->input('price');
        }else{
            $service->test = $request->input('service_type');
        }
        if($request->has('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('service'), $fileNameToStore);
            $service->image  = $fileNameToStore;
        }
        $service->save();
        return redirect()->route('admin_service')->with('success', 'Information updated succesfully');
    }

    public function service_details(Request $request)
    {
        $New = Service::where('title', $request->title)->first();
        return view('english.services.details', compact('New'));
    }

    public function service_edit(Request $request, Service $service)
    {
        if($request->service_type == 'Test')
        {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:200',
                'description' => 'required',
                'service_type' => 'required',
                'price' => 'required|numeric',
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:200',
                'description' => 'required',
                'service_type' => 'required',
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]); 
        }

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $service->title = $request->input('title');
        $service->description = $request->input('description');
        if($request->service_type == 'Test')
        {
            $service->test = $request->input('service_type');
            $service->price = $request->input('price');
        }else{
            $service->test = $request->input('service_type');
        }
        if($request->has('image'))
        {
            if(asset(Storage::exists($service->image)))
            {
                asset(Storage::delete($service->image));
            }
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('service'), $fileNameToStore);
            $service->image  = $fileNameToStore;
        }
        $service->save();
        return redirect()->route('admin_service')->with('success', 'Information updated succesfully');
    }

    public function service_delete($id)
    {
        $service = Service::findorfail($id);
        if(asset(Storage::exists($service->image)))
        {
            asset(Storage::delete($service->image));
        }
        $service->delete();
        return redirect()->route('admin_service')->with('success', 'Information updated succesfully');
    }
}
