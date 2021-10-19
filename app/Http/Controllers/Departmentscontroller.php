<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Bedcontroller;
use App\User;
use Auth;
use Session;

class Departmentscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Create Departments select and Get Back
        $Departments_select = Department::orderBy('created_at','desc')->get();
        // Create new Departments and Get Back
        $Departments = Department::orderBy('created_at','desc')->paginate(10);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Departments.index',compact('Departments','Departments_select'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Departments.index',compact('Departments','Departments_select'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Departments.index',compact('Departments','Departments_select')); 
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
        // GET new Department and Get Back
        $Department = Department::where('slug', '=', $slug)->firstOrFail();
        // Create new Beds and Get Back
        $Beds = Bedcontroller::where('Department_id','=', $Department->id)->paginate(12); 
        // GET Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Departments.show',compact('Department','Beds'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Departments.show',compact('Department','Beds'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Departments.show',compact('Department','Beds')); 
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
