<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bedcontroller;
use App\User;
use App\Review;
use Auth;
use Session;

class Bedscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // Bed controllerselect with return back
        $Beds_select = Bedcontroller::orderBy('created_at','desc')->get();
        // Bed with return back
        $Beds = Bedcontroller::orderBy('created_at','desc')->paginate(10);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Beds.index',compact('Beds','Beds_select'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Beds.index',compact('Beds','Beds_select'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Beds.index',compact('Beds','Beds_select')); 
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
        // Bed controllerselect with return back
        $Bed = Bedcontroller::where('slug', '=', $slug)->firstOrFail();
        //To Get Reviews Product OUT SIDE IN SHOW VIEW
        $Reviews = $Bed->Reviews;
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Beds.show',compact('Bed','Reviews'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Beds.show',compact('Bed','Reviews'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Beds.show',compact('Bed','Reviews')); 
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
