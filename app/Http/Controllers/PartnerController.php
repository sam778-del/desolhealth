<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partner = Partner::orderBy('id', 'DESC')->get();
        return view('english.partner.index', compact('partner'));
    }

    public function create()
    {
        return view('english.partner.create');
    }

    public function edit($id)
    {
        $partner = Partner::findorfail($id);
        return view('english.partner.edit', compact('partner'));
    }

    public function partner_create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $partner = new Partner();
        if($request->has('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('partner'), $fileNameToStore);
            $partner->image  = $fileNameToStore;
        }
        $partner->save();
        return redirect()->route('admin_partner')->with('success', 'Information updated succesfully');
    }

    public function partner_edit(Request $request, Partner $partner)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        if($request->has('image'))
        {
            if(file_exists(asset($partner->image)))
            {
                \File::delete(asset($partner->image));
            }
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('partner'), $fileNameToStore);
            $partner->image  = $fileNameToStore;
        }
        $partner->save();
        return redirect()->route('admin_partner')->with('success', 'Information updated succesfully');
    }

    public function partner_delete($id)
    {
        $partner = Partner::findorfail($id);
        if(file_exists(asset($partner->image)))
        {
            \File::delete(asset($partner->image));
        }
        $partner->delete();
        return redirect()->route('admin_partner')->with('success', 'Information updated succesfully');
    }
}
