<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Mail\ContactUs;

// ???????????Post should be posts...really i should be using the contact us controller
class PostController extends Controller
{
    public function index()
    {
      return view('posts.index');
      // return view('layouts.master');//this was my issue
    }

    public function show()
    {
      return view('posts.show');
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store()
    {

      //die and dump
       // dd(request()->all());

        // Create a new post using the request data

        Post::create(request(['name', 'email', 'message']));

        \Mail::to('jscher01@gmail.com')->send(new ContactUs);

        //this next line may be better
        //\Mail::to($email)->send(new ContactUs);

        //????????should add something that said it worked.
        return redirect('/');
    }
}
