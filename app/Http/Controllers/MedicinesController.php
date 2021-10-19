<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Medicine;
use App\Comment;

class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To Get All Medicines OUT SIDE IN HOME VIEW
        $Medicines = Medicine::orderBy('created_at','desc')->paginate(8);
        //To Get All Medicines select OUT SIDE IN HOME VIEW
        $Medicines_select = Medicine::orderBy('created_at','desc')->get();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Medicines.index',compact('Medicines','Medicines_select'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Medicines.index',compact('Medicines','Medicines_select'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Medicines.index',compact('Medicines','Medicines_select')); 
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //To Get All Medicine select OUT SIDE IN HOME VIEW
        $Medicine = Medicine::where('slug', '=', $slug)->firstOrFail();
        //To Get All Comments Post  OUT SIDE IN HOME VIEW
        $comments = $Medicine->comments;
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Medicines.show',compact('Medicine','comments'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Medicines.show',compact('Medicine','comments'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Medicines.show',compact('Medicine','comments')); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
