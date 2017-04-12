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
                'post_title'            => 'required|max:255',
                'post_description'      => 'required|max:500',
                'post_link'             => 'required|max:500',
                'post_img'              => 'required|max:500', 
                'posted_by_user'        => 'required|max:255',
                'posted_by_user_name'   => 'required|max:255',
                'post_id'               => 'required|max:255',
                'likes'                 => 'required|max:1',
                'shared_with'           => 'required|max:255',
        ];

        // Validate
        $this->validate($request, $rules);

        $post_id = str_random(19);

        // Update database
        DB::table('posts')->insert([
            'post_title'            => Input::get('post_title'),
            'post_description'      => Input::get('post_description'),
            'post_link'             => Input::get('post_link'),
            'post_img'              => Input::get('post_img'),
            'posted_by_user'        => Input::get('posted_by_user'),
            'posted_by_user_name'   => Input::get('posted_by_user_name'),
            'post_id'               => $post_id,
            'likes'                 => Input::get('likes'),
            'shared_with'           => Input::get('shared_with'),
         ]);

        return redirect('newsfeed');
        
    }



    public function new_image_post()
    {
        return view('posts.new_image_post');
    }

    public function submit_new_image_post(Request $request)
    {

        $current_user = Auth::user()->id;

        // Validation rules
        $rules = [
                'post_title'            => 'required|max:255',
                'post_description'      => 'required|max:500',
                'post_link'             => 'required|max:500',
                'post_img'              => 'required|max:500', 
                'posted_by_user'        => 'required|max:255',
                'posted_by_user_name'   => 'required|max:255',
                'post_id'               => 'required|max:255',
                'likes'                 => 'required|max:1',
                'shared_with'           => 'required|max:255',
        ];

        // Validate
        $this->validate($request, $rules);

        $post_id = str_random(20);

        // Update database
        DB::table('posts')->insert([
            'post_title'            => Input::get('post_title'),
            'post_description'      => Input::get('post_description'),
            'post_link'             => Input::get('post_link'),
            'post_img'              => Input::get('post_img'),
            'posted_by_user'        => Input::get('posted_by_user'),
            'posted_by_user_name'   => Input::get('posted_by_user_name'),
            'post_id'               => $post_id,
            'likes'                 => Input::get('likes'),
            'shared_with'           => Input::get('shared_with'),
         ]);

        // Handle image upload
        if($request->hasFile('file')){
            $file = $request->file('file'); // Request file from the upload form.
            $allowed_file_types = config('app.allowed_file_types');
            $max_file_size = config('app.max_file_size');

            $username = Input::get('posted_by_user_name');
            $desc = Input::get('post_description');

            // Validation
            $rules = [
                'file' => 'mimes:'.$allowed_file_types.'|max:'.$max_file_size,
            ];
            $this->validate($request, $rules);

            $random_string = str_random(20); // Generate a random string to prepend to the filename, to prevent duplicate filenames.
            $file_name = ($random_string.'-'.($file->getClientOriginalName())); // Request the file name.
            $destination_path = config('app.post_file_destination_path').'/'.$file_name; // Set the destination.
            $uploaded = Storage::put($destination_path, file_get_contents($file->getRealPath()));

            // Insert filename into the database table for the logged in user.
                if($uploaded){

                    // Update the database with the image filename
                    DB::table('posts')->where('post_id', '=', $post_id)->update([
                        'post_img' => $file_name,
                    ]);
                }
                 
        }

        return redirect('newsfeed');
        
    }




    // public function new_image_post()
    // {
    //     return view('posts.new_image_post');
    // }

    // public function submit_new_image_post(Request $request)
    // {

    //     $current_user = Auth::user()->id;

    //     // Validation rules
    //     $rules = [
    //             'post_title'            => 'required|max:255',
    //             'post_description'      => 'required|max:500',
    //             'post_link'             => 'required|max:500',
    //             'post_img'              => 'required|max:500', 
    //             'posted_by_user'        => 'required|max:255',
    //             'posted_by_user_name'   => 'required|max:255',
    //             'likes'                 => 'required|max:1',
    //             'shared_with'           => 'required|max:255',
    //     ];

    //     // Validate
    //     $this->validate($request, $rules);
    //     $post_id = str_random(20);

    //     // Update database
    //     DB::table('posts')->insert([
    //         'post_title'            => Input::get('post_title'),
    //         'post_description'      => Input::get('post_description'),
    //         'post_link'             => Input::get('post_link'),
    //         'post_img'              => 'default',
    //         'posted_by_user'        => Input::get('posted_by_user'),
    //         'posted_by_user_name'   => Input::get('posted_by_user_name'),
    //         'likes'                 => Input::get('likes'),
    //         'shared_with'           => Input::get('shared_with'),
    //         'post_id'               => 'default',
    //      ]);

        // Handle image upload
        // if($request->hasFile('file')){
        //     $file = $request->file('file'); // Request file from the upload form.
        //     $allowed_file_types = config('app.allowed_file_types');
        //     $max_file_size = config('app.max_file_size');

        //     // Validation
        //     $rules = [
        //         'file' => 'mimes:'.$allowed_file_types.'|max:'.$max_file_size,
        //     ];
        //     $this->validate($request, $rules);

        //     $random_string = str_random(20); // Generate a random string to prepend to the filename, to prevent duplicate filenames.
        //     $file_name = ($random_string.'-'.($file->getClientOriginalName())); // Request the file name.
        //     $destination_path = config('app.post_file_destination_path').'/'.$file_name; // Set the destination.
        //     $uploaded = Storage::put($destination_path, file_get_contents($file->getRealPath()));

        //     // Insert filename into the database table for the logged in user.
        //         if($uploaded){

        //             // Delete the user's previous profile picture
        //             // $image_exists = DB::table('posts')->where('user_id', $current_user)->value('profile_img');

        //             // Protect placeholder image from deletion when a new account changes their profile picture.
        //             // if($image_exists !== 'profile-placeholder-300x300.png'){
        //                 // Storage::delete(config('app.file_destination_path').'/'.$image_exists);
        //             // }

        //             // Update the database with the image filename
        //             DB::table('posts')->where('post_id', '=', $post_id)->update([
        //                 'post_img' => $file_name,
        //             ]);
        //         }
                 
        // }

    //     return redirect('newsfeed');
        
    // }
}
