<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use App\Wishlist;
use App\Review;
use Auth;
use Session;
use App\Department;
use App\Appointment;

class Doctorscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To Get All Doctors OUT SIDE IN HOME VIEW
        $Doctors = User::where('role_id', '=', '3')->orderBy('created_at','desc')->paginate(8);
        //To Get All Doctors select OUT SIDE IN HOME VIEW
        $Doctors_select = User::where('role_id', '=', '3')->orderBy('created_at','desc')->get();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Doctors.index',compact('Doctors','Doctors_select'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Doctors.index',compact('Doctors','Doctors_select'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Doctors.index',compact('Doctors','Doctors_select')); 
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
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        // This query to get Doctor page //
        $Doctor = User::where('name', '=', $name)->firstOrFail();
        //To Get Reviews Product OUT SIDE IN SHOW VIEW
        $Reviews = $Doctor->Reviews;
        //To Get All Appointments OUT SIDE IN HOME VIEW
        $Appointments = $Doctor->Appointments;
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Doctors.show',compact('Doctor','Reviews','Appointments'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Doctors.show',compact('Doctor','Reviews','Appointments'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Doctors.show',compact('Doctor','Reviews','Appointments')); 
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
