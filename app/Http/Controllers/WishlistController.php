<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Wishlist;
use App\Medicine;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\WishlistRequest;
use Session;

class WishlistController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

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
          //To Medicine select SIDE IN HOME VIEW
        $Medicine = Medicine::findOrFail($request->Medicine_id);
        Wishlist::create([
            'User_id' => Auth::id(),
            'Medicine_id' => $Medicine->id
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        // this query to get USER SINGLE page //
        $User = User::where('name', '=', $name)->firstOrFail();
        if ($User->id == Auth::id()) {
        $Wishlists = Wishlist::where('User_id', '=', $User->id)->get();
          //To Get change the language arabic or english
        if (Session::get('lang') == 'arabic') {
            return view('arabic.Wishlists.show', compact('User','Wishlists'));
           
        }
        else{
            return view('english.Wishlists.show', compact('User','Wishlists'));
        }
        }
        else
          {
            return redirect()->back();
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
        // REMOVE Medicine
        $Wishlist = Wishlist::findOrFail($id);
        $Wishlist->delete();
        return back();
    }
}
