<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Doctor;
use App\User;
use App\Patient;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //To Patients SIDE IN HOME VIEW
        $Patients = User::where('role_id', '=', '2')->orderBy('created_at','desc')->paginate(8);
        //To Patients select SIDE IN HOME VIEW
        $Patients_select = User::where('role_id', '=', '2')->orderBy('created_at','desc')->get();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Patients.index',compact('Patients','Patients_select'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Patients.index',compact('Patients','Patients_select'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Patients.index',compact('Patients','Patients_select')); 
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
    public function show($name)
    {
        // this query to get Patient page //
        $Patient = User::where('name', '=', $name)->firstOrFail();
        
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Patients.show',compact('Patient'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Patients.show',compact('Patient'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Patients.show',compact('Patient')); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {

       
        
        // this query to get Patient page //
        $Patient = User::where('name', '=', $name)->firstOrFail();
        
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Patients.edit',compact('Patient'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Patients.edit',compact('Patient'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Patients.edit',compact('Patient')); 
        }
    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        // THIS FUNCTION update User IN PAGE User //
        $Patient = User::where('name', '=', $name)->firstOrFail();
        // THIS INPUT RETURN FROM UPDATE PAGE USER //
        $Patient->name = $request->input('name');
        $Patient->email = $request->input('email');
        $Patient->password = $request->input('password');
        // THIS FUNCTION UPDATE NEW IMAGE USER IN PAGE USER UPDATE //
         if ($request->file('avatar')){  
          $file = $request->file('avatar');
          $date = date('FY');
          $destinationPath = 'storage/users/'.$date.'/';
          $viewimage = 'users/'.$date.'/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Patient->avatar = $filename;
          // THIS TO SAVE  USER UPDATE //
          $Patient->save();
       }else{
          // THIS TO SAVE  USER UPDATE //
          $Patient->save();
       }

        //To Get change the language arabic or english
        if (Session::get('lang') == 'arabic') {
            // this query to get USER SINGLE page //
            $Patient = User::where('name', '=', $name)->firstOrFail();
            return back()->with('Messagge', 'Patient');
            //return view('arabic.Patients.show', compact('Patient'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           // this query to get USER SINGLE page //
           $Patient = User::where('name', '=', $name)->firstOrFail();
           return back()->with('Messagge', 'Patient');
           //return view('German.Patients.show',compact('Patient'));   
        }
        else{
            // this query to get USER SINGLE page //
            $Patient = User::where('name', '=', $name)->firstOrFail();
            return back()->with('Messagge', 'Patient');
            //return view('english.Patients.show', compact('Patient'));
        }
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
