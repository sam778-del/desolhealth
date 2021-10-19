<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Appointmentrequset;
use App\Appointment;
use Auth;
use Session;
use App\Doctor;
use App\User;
use App\Wishlist;
use App\Review;
use App\Department;
use Validator;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'Patien_ID' => 'required',
            'Appointment_Date' => 'required',
            'Serial' => 'required',
            'Problem' => 'required',
            'Department_id' => 'required',
            'Doctor_id' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        // cerate Appointment with return back
        Appointment::create([
            'Patient_ID' => $request->Patient_ID,
            'Appointment_Date' => date('Y-m-d', strtotime($request->Appointment_Date)),
            'Serial' => $request->Serial,
            'Problem' => $request->Problem,
            'Department_id' => $request->Department_id,
            'Doctor_id' => $request->Doctor_id,
            'user_id' => Auth::id(),

        ]);
        //Appointment with return back
        return redirect()->back()->with('success', __('Appointment Created Succesfully'));
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
        //To Get Appointments
        $Appointments = $Doctor->Appointments;
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Appointment.show',compact('Doctor','Appointments'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Appointment.show',compact('Doctor','Appointments'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Appointment.show',compact('Doctor','Appointments')); 
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
        // destroy Appointment with return back
        $Appointment = Appointment::findOrFail($id);
        $Appointment->delete();
        return back();
    }
}
