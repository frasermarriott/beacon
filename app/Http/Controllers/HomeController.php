<?php

namespace beacon\Http\Controllers;

use beacon\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use Input;
use \Storage;
use Nahid\Talk\Live\Broadcast;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function messages()
    {
        if ( Auth::guest() ) {
             return view('welcome');
         }
         else {

            $users = User::all();
            return view('messages', compact('users'));

         }
    }


    public function newsfeed()
    {
        if ( Auth::guest() ) {
             return view('welcome');
         }
         else {
             return view('newsfeed');
         }
    }


    public function photos()
    {
        if ( Auth::guest() ) {
             return view('welcome');
         }
         else {
             return view('photos');
         }
    }


    public function family()
    {
        if ( Auth::guest() ) {
             return view('welcome');
         }
         else {
             return view('family');
         }
    }


    public function profile()
    {
        if ( Auth::guest() ) {
             return view('welcome');
         }
         else {
             return view('profile');
         }
    }


    public function help_and_settings()
    {
        if ( Auth::guest() ) {
             return view('welcome');
         }
         else {
             return view('help-and-settings');
         }
    }
}
