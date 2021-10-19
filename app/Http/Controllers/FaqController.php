<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use Validator;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::orderBy('id', 'DESC')->get();
        return view('english.faq.index', compact('faq'));
    }

    public function create()
    {
        return view('english.faq.create');
    }

    public function edit($id)
    {
        $faq = Faq::findorfail($id);
        return view('english.faq.edit', compact('faq'));
    }

    public function faq_create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200',
            'description' => 'required'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $faq = new Faq();
        $faq->title = $request->input('title');
        $faq->description = $request->input('description');
        $faq->save();
        return redirect()->route('admin_faq')->with('success', 'Information updated succesfully');
    }

    public function website_faq()
    {
        $faq = Faq::orderBy('id', 'DESC')->get();
        return view('english.faq.website', compact('faq'));
    }

    public function website_mission()
    {
        return view('english.faq.mission');
    }

    public function faq_edit(Request $request, Faq $faq)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200',
            'description' => 'required'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $faq->title = $request->input('title');
        $faq->description = $request->input('description');
        $faq->save();
        return redirect()->route('admin_faq')->with('success', 'Information updated succesfully');
    }

    public function faq_delete($id)
    {
        $faq = Faq::findorfail($id);
        $faq->delete();
        return redirect()->route('admin_faq')->with('success', 'Information updated succesfully');
    }
}
