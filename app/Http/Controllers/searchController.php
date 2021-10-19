<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Post;
use App\Department;
use App\User;
use App\Operation;
use App\Birth;
use App\Blood;
use App\Medicine;
use Session, DB;
use Auth;

class searchController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Newssearch()
    {                      
           // Gets the query string from our form submission 
           $search = \Request::get('search');
           // Searches for News titles //
           $News = Post::where('title', 'LIKE', '%' . $search . '%')->paginate(5);
           // To Get Change The Language Arabic or English or German
            if (Session::get('lang') == 'arabic') {
               return view('arabic.News.search', compact('News','search'));
            }
            // To Get Change The Language Arabic or English or German
            elseif (Session::get('lang') == 'German'){
               return view('German.News.search',compact('News','search'));   
            }
            // To Get Change The Language Arabic or English or German
            else{
               return view('english.News.search',compact('News','search')); 
            }
           
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {                      
           // Gets the query string from our form submission 
           $search = \Request::get('search');
           // Searches for Department titles //
           $Departments = Department::where('Department_Name', 'LIKE', '%' . $search . '%')->paginate(5);
           // Searches for Users titles //
           $Users = User::where('name', 'LIKE', '%' . $search . '%')->paginate(5);
           // Searches for Operation_Title titles //
           $Operations = Operation::where('Operation_Title', 'LIKE', '%' . $search . '%')->paginate(5);
           // Searches for Birth titles //
           $Births = Birth::where('Birth_name', 'LIKE', '%' . $search . '%')->paginate(5);
           // Searches for Blood titles //
           $Bloods = Blood::where('Blood_en', 'LIKE', '%' . $search . '%')->paginate(5);
           // Searches for News titles //
           $News = Post::where('title', 'LIKE', '%' . $search . '%')->paginate(5);
           // Searches for Medicine titles //
           $Medicines = Medicine::where('Medicine_Name', 'LIKE', '%' . $search . '%')->paginate(5);
           // To Get Change The Language Arabic or English or German
            if (Session::get('lang') == 'arabic') {
               return view('arabic.search', compact('News','search','Departments','Users','Operations','Births','Bloods','Medicines'));
            }
            // To Get Change The Language Arabic or English or German
            elseif (Session::get('lang') == 'German'){
               return view('German.search',compact('News','search','Departments','Users','Operations','Births','Bloods','Medicines'));   
            }
            // To Get Change The Language Arabic or English or German
            else{
               return view('english.search',compact('News','search','Departments','Users','Operations','Births','Bloods','Medicines')); 
            }
           
    }


}
