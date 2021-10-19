<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Resume;

class Resumecontroller extends Controller
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
         // THIS FUNCTION CREATE NEW POST IN PAGE Resume CREATE //
        $Resume = new Resume;
        // THIS INPUT RETURN FROM CREATE PAGE POST //
        $Resume->Name = $request->input('Name');
        $Resume->Telephone = $request->input('Telephone');
        $Resume->Message = $request->input('Message');
        // THIS FUNCTION CREATE NEW IMAGE POST IN PAGE Resume CREATE //
         if ($request->file('File')){  
          $file = $request->file('File');
          // THIS FUNCTION TO GET DATE NAME FILE //
          $date = date('FY');
          // THIS TO GET FILE PATCH //
          $destinationPath = 'storage/resumes/'.$date.'/';
          $viewResume = 'resumes/'.$date.'/';         
          $filename = $viewResume.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Resume->File = $filename;
          // THIS TO SAVE  //
          $Resume->save();
       }else{
          // THIS TO SAVE //
          $Resume->save();
       }
       // THIS FUNCTION return YOU back CHANGE IT TO WAHT YOU WANT  //
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
