<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Application;
use App\Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }
}
