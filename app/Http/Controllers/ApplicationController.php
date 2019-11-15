<?php

namespace App\Http\Controllers;

use App\Application;
use App\Image;

use Illuminate\Http\Request;

// Add for authentication to work
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.applications.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Request data from fields
        $input = $request->all();

        request()->validate([

            'image_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //Get Image
        if($file = $request->file('image_id')){

            // Add current time in seconds to image
            $name = time() . $file->getClientOriginalName();

            //Move image to photos directory
            $file->move('photos', $name);

            //add image to database
            $photo = Image::create(['img'=>$name]);

            //assign image id to $input array
            $input['image_id'] = $photo->id;
        }

        Application::create($input);

        //session notification
        Session::flash('success',  'Application has been added');

        return redirect('registration-complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('admin.applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
