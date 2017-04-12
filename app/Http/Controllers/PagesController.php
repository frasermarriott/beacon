<?php

namespace beacon\Http\Controllers;

use beacon\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use Input;
use \Storage;
use Nahid\Talk\Live\Broadcast;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function privacy_policy()
    {
        return view('privacy_policy');
    }

    public function contact_us()
    {
        return view('contact_us');
    }
    
}
