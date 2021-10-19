<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Messagerequest;
use App\User;
use App\Message;

class Messagescontroller extends Controller
{

    //To Get middleware auth
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
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To Get Messagge create
        Message::create([
            'Message_name' => $request->Message_name,
            'Message_content' => $request->Message_content,
            'res_id' => $request->res_id,
            'user_id' => Auth::id()
            
        ]);
        // redirect the user back
        return redirect()->back()->with('Messagge', 'hello');
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
        $Messages = Message::where('res_id', '=', $User->id)->get();
          //To Get change the language arabic or english
        if (Session::get('lang') == 'arabic') {
            return view('arabic.Messages.show', compact('User','Messages'));
           
        }
        else{
            return view('english.Messages.show', compact('User','Messages'));
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
        // TO GET Message SINGLE
        $Message = Message::findOrFail($id);
        // TO GET Message SINGLE AND delete IT
        $Message->delete();
        // TO RETURN BACK BAGE
        return back();
    }
}
