<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Department;
use App\Bedcontroller;
use App\Appointment;
use App\Birth;
use App\Employee;
use App\Operation;
use App\Medicine;
use App\Doctor;
use App\User;
use App\Wishlist;
use App\Review;
use App\Post;
use App\Term;
use Auth;
use Session;


class HomeController extends Controller {
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
    **/

    public function index()
    {
        //To Get All Doctors OUT SIDE IN HOME VIEW
        $Doctors = User::where('role_id', '=', '3')->orderBy('created_at','desc')->paginate(8);
        //To Get All Departments OUT SIDE IN HOME VIEW
        $Departments = Department::paginate(12);
        //To Get All News OUT SIDE IN HOME VIEW
        $News = Post::paginate(4);
        //To Get All Departments select OUT SIDE IN HOME VIEW
        $Departments_select = Department::get();
        //To Get All Doctors select OUT SIDE IN HOME VIEW
        $Doctors_select = User::where('role_id', '=', '3')->orderBy('created_at','desc')->get();
        //To Get All Bed controllers OUT SIDE IN HOME VIEW
        $Bedcontrollers = Bedcontroller::paginate(8);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.home',compact('Departments','Doctors','Bedcontrollers','Departments_select','Doctors_select','News'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.home',compact('Departments','Doctors','Bedcontrollers','Departments_select','Doctors_select','News'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.home',compact('Departments','Doctors','Bedcontrollers','Departments_select','Doctors_select','News')); 
        }
    }
    /**
     * Show the application HumanResources.
     *
     * @return \Illuminate\Http\Response
    **/
    public function HumanResources()
    {
        //To Get All Bed Employees OUT SIDE IN HOME VIEW
        $Employees = Employee::paginate(40);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.HumanResources',compact('Employees'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.HumanResources',compact('Employees'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.HumanResources',compact('Employees')); 
        }
    }
    /**
     * Show the application HumanResources.
     *
     * @return \Illuminate\Http\Response
    **/
    public function HospitalActivities()
    {
        //To Get All Births OUT SIDE IN HOME VIEW
        $Births = Birth::paginate(6);
        //To Get All Operations OUT SIDE IN HOME VIEW
        $Operations = Operation::paginate(3);
        //To Get All Medicines OUT SIDE IN HOME VIEW
        $Medicines = Medicine::paginate(6);
        //To Get All Reports OUT SIDE IN HOME VIEW
        $Reports = Appointment::get();
        //To Get All Users OUT SIDE IN HOME VIEW
        $Users = User::get();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.HospitalActivities',compact('Reports','Users','Births','Operations','Medicines'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.HospitalActivities',compact('Reports','Users','Births','Operations','Medicines'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.HospitalActivities',compact('Reports','Users','Births','Operations','Medicines')); 
        }
    }
    /**
     * Show the application HumanResources.
     *
     * @return \Illuminate\Http\Response
    **/
    public function About()
    {
        //To Get All Births OUT SIDE IN HOME VIEW
        $Births = Birth::paginate(6);
        //To Get All Operations OUT SIDE IN HOME VIEW
        $Operations = Operation::paginate(3);
        //To Get All Medicines OUT SIDE IN HOME VIEW
        $Medicines = Medicine::paginate(6);
        //To Get All Reports OUT SIDE IN HOME VIEW
        $Reports = Appointment::get();
        //To Get All Users OUT SIDE IN HOME VIEW
        $Users = User::get();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.About',compact('Reports','Users','Births','Operations','Medicines'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.About',compact('Reports','Users','Births','Operations','Medicines'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.About',compact('Reports','Users','Births','Operations','Medicines')); 
        }
    }
    

    /**
     * Show the application HumanResources.
     *
     * @return \Illuminate\Http\Response
    **/
    public function  Termscondition()
    {
        //To Get All Terms OUT SIDE IN HOME VIEW
        $Terms = Term::all();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Termscondition',compact('Terms'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Termscondition',compact('Terms'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Termscondition',compact('Terms')); 
        }
    }

    

   
}
