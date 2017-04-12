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

            // Select only family members to be sent to view
            $users = User::all()->where('linked_to_family', Auth::User()->linked_to_family);
            return view('messages', compact('users'));

         }
    }


    public function newsfeed()
    {
        if ( Auth::guest() ) {
             return view('welcome');
         }
         else {

            // Get the latest posts from the database
            $posts = DB::table('posts')
                     ->where('shared_with', Auth::User()->linked_to_family)
                     ->latest()
                     ->get();
            return view('newsfeed', compact('posts'));
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

            // Select only family members to be sent to view
            $users = User::all()->where('linked_to_family', Auth::User()->linked_to_family);
            return view('family', compact('users'));
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


    // public function privacy_policy()
    // {
    //     return view('privacy_policy');
    // }
}
