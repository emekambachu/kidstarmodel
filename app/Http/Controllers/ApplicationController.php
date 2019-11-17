<?php

namespace App\Http\Controllers;

use App\Application;
use App\Image;

use Illuminate\Http\Request;

// Add for authentication to work
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        $this->validate($request, [
            'image_id'  => 'image|mimes:jpg,jpeg,png,gif|max:5048'
        ]);

        //Request data from fields
        $input = $request->all();

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

        Mail::send('emails.registration', $input, function ($message) use ($input) {
            $message->from('info@kidstarmodels.com', 'Kidstar Models');
            $message->to($input['parent_email'], $input['parent_surname'].' '.$input['parent_othernames'])->cc('info@kidstarmodels.com');
            $message->replyTo('info@kidstarmodels.com', 'Kidstar Models');
            $message->subject('Your Application has been Submitted');
        });

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

    public function approve(Request $request, $id)
    {
        $application = Application::findOrFail($id);

        if($application->paid){
            $application->paid = 0;
            Session::flash('danger', 'Application Disapproved');
            $application->save();

        }else{
            $application->paid = 1;
            Session::flash('success', 'Application Approved');
            $application->save();

        }

        return redirect()->back();
    }

    public function paidApplications()
    {
        $applications = Application::where('paid', True)->paginate(15);
        $countAllApplications = Application::all()->count();
        $countPaidApplications = Application::where('paid', True)->count();

        return view('admin.applications.paid-applications', compact('countAllApplications', 'countPaidApplications', 'applications'));
    }

    public function pendingApplications()
    {
        $applications = Application::where('paid', False)->paginate(15);
        $countAllApplications = Application::all()->count();
        $countPaidApplications = Application::where('paid', True)->count();

        return view('admin.applications.pending-applications', compact('countAllApplications', 'countPaidApplications', 'applications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
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
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
