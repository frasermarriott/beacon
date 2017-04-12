<?php

namespace beacon\Http\Controllers;

use beacon\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use Input;
use \Storage;
use Nahid\Talk\Live\Broadcast;

class PostController extends Controller
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


    public function new_text_post()
    {
        return view('posts.new_text_post');
    }

    public function submit_new_text_post(Request $request)
    {

        $current_user = Auth::user()->id;

        // Validation rules
        $rules = [
                'post_title'        => 'required|max:255',
                'post_description'  => 'required|max:500',
                'post_link'         => 'required|max:500',
                'post_img'          => 'required|max:500', 
                'posted_by_user'    => 'required|max:255',
                'likes'             => 'required|max:1',
                'shared_with'       => 'required|max:255',
        ];

        // Validate
        $this->validate($request, $rules);

        // Update database
        DB::table('posts')->insert([
            'post_title'        => Input::get('post_title'),
            'post_description'  => Input::get('post_description'),
            'post_link'         => Input::get('post_link'),
            'post_img'          => Input::get('post_img'),
            'posted_by_user'    => Input::get('posted_by_user'),
            'likes'             => Input::get('likes'),
            'shared_with'       => Input::get('shared_with'),
         ]);

        return redirect('newsfeed');
        
    }
}
