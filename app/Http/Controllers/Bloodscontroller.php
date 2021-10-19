<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blood;
use App\Patients;
use App\User;
use Auth;
use Session;
use App\Comment;

class Bloodscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // Births select with return back
        $Bloods_select = Blood::orderBy('created_at','desc')->get();
        // Births select with return back
        $Bloods = Blood::orderBy('created_at','desc')->paginate(10);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Bloods.index',compact('Bloods_select','Bloods'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Bloods.index',compact('Bloods_select','Bloods'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Bloods.index',compact('Bloods_select','Bloods')); 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $Blood = Blood::where('slug', '=', $slug)->firstOrFail();
        //To Get All Comments Post  OUT SIDE IN HOME VIEW
        $comments = $Blood->comments;
        //To Get All Patients Post  OUT SIDE IN HOME VIEW
        $Patients = $Blood->Patients;
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Bloods.show',compact('Blood','Reviews','comments','Patients'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Bloods.show',compact('Blood','Reviews','comments','Patients'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Bloods.show',compact('Blood','Reviews','comments','Patients')); 
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
