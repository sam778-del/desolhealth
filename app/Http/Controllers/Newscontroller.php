<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Blog;
use App\Comment;
use App\Category;
use Auth;
use Session;
use App\Bedcontroller;

class Newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To Get All News select OUT SIDE IN HOME VIEW
        $News = Blog::paginate(4);
        //To Get All Posts recents select OUT SIDE IN HOME VIEW
        $Postsrecents = Blog::paginate(3)->fresh(); 
        //To Get All Categores OUT SIDE IN HOME VIEW
        $Categores = Category::paginate(5)->fresh(); 
        //To Get All Popular Rooms OUT SIDE IN HOME VIEW
        $PopularRooms = Bedcontroller::simplePaginate(8)->Fresh(); 
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.News.index',compact('News','Postsrecents','Categores','PopularRooms')); 
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.News.index',compact('News','Postsrecents','Categores','PopularRooms'));    
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.News.index',compact('News','Postsrecents','Categores','PopularRooms')); 
        }
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
    public function show($title)
    {
        // This query to get New page //
        $New = Blog::where('title', '=', $title)->firstOrFail();
        //To Get All Popular Rooms OUT SIDE IN HOME VIEW
        $PopularRooms = Bedcontroller::simplePaginate(8)->Fresh();
        //To Get All Posts recents OUT SIDE IN HOME VIEW
        $Postsrecents = Blog::paginate(3)->fresh(); 
        //To Get All Categores OUT SIDE IN HOME VIEW
        $Categores = Category::paginate(5)->fresh();
        //To Get All Comments Post  OUT SIDE IN HOME VIEW
        $comments = $New->comments;
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.News.show',compact('New','PopularRooms','Postsrecents','Categores','comments'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.News.show',compact('New','PopularRooms','Postsrecents','Categores','comments'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.News.show',compact('New','PopularRooms','Postsrecents','Categores','comments')); 
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
