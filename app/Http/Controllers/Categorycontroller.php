<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Blog;
use Auth;
use Session;
use App\Bedcontroller;

class Categorycontroller extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        //To Get All News category Post  OUT SIDE IN HOME VIEW
        $Newscategory = Category::where('name', '=', $name)->firstOrFail();
        //To Get All News Post  OUT SIDE IN HOME VIEW
        $News = Blog::where('category_id','=', $Newscategory->id)->paginate(10);
        //To Get All Posts recents Post  OUT SIDE IN HOME VIEW
        $Postsrecents = Post::paginate(3)->fresh();
        //To Get All Popular Rooms Post  OUT SIDE IN HOME VIEW 
        $PopularRooms = Bedcontroller::simplePaginate(8)->Fresh(); 
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Categores.show',compact('Newscategory','Postsrecents','News','PopularRooms')); 
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Categores.show',compact('Newscategory','Postsrecents','News','PopularRooms'));    
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Categores.show',compact('Newscategory','Postsrecents','News','PopularRooms')); 
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
