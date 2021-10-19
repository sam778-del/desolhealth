<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
use Validator;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $testimony = Testimony::orderBy('id', 'DESC')->get();
        return view('english.testimony.index', compact('testimony'));
    }

    public function create()
    {
        return view('english.testimony.create');
    }

    public function edit($id)
    {
        $testimony = Testimony::findorfail($id);
        return view('english.testimony.edit', compact('testimony'));
    }

    public function testimony_create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'description' => 'required',
            'position' => 'required|max:100',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $testimony = new Testimony();
        $testimony->title = $request->input('title');
        $testimony->description = $request->input('description');
        $testimony->position = $request->input('position');
        if($request->has('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('testimony'), $fileNameToStore);
            $testimony->image  = $fileNameToStore;
        }
        $testimony->save();
        return redirect()->route('admin_testimony')->with('success', 'Information updated succesfully');
    }

    public function testimony_edit(Request $request, Testimony $testimony)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'description' => 'required',
            'position' => 'required|max:100',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $testimony->title = $request->input('title');
        $testimony->description = $request->input('description');
        $testimony->position = $request->input('position');
        if($request->has('image'))
        {
            if(file_exists(asset($testimony->image)))
            {
                \File::delete(asset($testimony->image));
            }
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('testimony'), $fileNameToStore);
            $testimony->image  = $fileNameToStore;
        }
        $testimony->save();
        return redirect()->route('admin_testimony')->with('success', 'Information updated succesfully');
    }

    public function testimony_delete($id)
    {
        $testimony = Testimony::findorfail($id);
        if(file_exists(asset($testimony->image)))
        {
            \File::delete(asset($testimony->image));
        }
        $testimony->delete();
        return redirect()->route('admin_testimony')->with('success', 'Information updated succesfully');
    }
}
