<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advice;
use Validator;

class AdviceController extends Controller
{
    public function index()
    {
        $advice = Advice::orderBy('id', 'DESC')->get();
        return view('english.advice.index', compact('advice'));
    }

    public function create()
    {
        return view('english.advice.create');
    }

    public function edit($id)
    {
        $advice = Advice::findorfail($id);
        return view('english.advice.edit', compact('advice'));
    }

    public function hub_details(Request $request)
    {
        $New = Advice::where('title', $request->title)->first();
        return view('english.advice.details', compact('New'));
    }

    public function advice_hub()
    {
        $advice = Advice::orderBy('id', 'DESC')->get();
        return view('english.advice.hub', compact('advice'));
    }

    public function advice_create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $advice = new Advice();
        $advice->title = $request->input('title');
        $advice->description = $request->input('description');
        if($request->has('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('advice'), $fileNameToStore);
            $advice->image  = $fileNameToStore;
        }
        $advice->save();
        return redirect()->route('admin_advice')->with('success', 'Information updated succesfully');
    }

    public function advice_edit(Request $request, Advice $advice)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $advice->title = $request->input('title');
        $advice->description = $request->input('description');
        if($request->has('image'))
        {
            if(file_exists(asset('advice'.'/'.$advice->image)))
            {
                \File::delete(asset('advice'.'/'.$advice->image));
            }
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('advice'), $fileNameToStore);
            $advice->image  = $fileNameToStore;
        }
        $advice->save();
        return redirect()->route('admin_advice')->with('success', 'Information updated succesfully');
    }

    public function advice_delete($id)
    {
        $advice = Advice::findorfail($id);
        if(file_exists(asset('advice'.'/'.$advice->image)))
        {
            \File::delete(asset('advice'.'/'.$advice->image));
        }
        $advice->delete();
        return redirect()->route('admin_advice')->with('success', 'Information updated succesfully');
    }
}
