<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index() {
    	return view('posts.index');	
    }

    public function show() {
    	return view('posts.show');
    }

    public function create() {
    	return view('posts.create');
    }

    public function store() {

    	// dd(request()-> all());

    	// dd(request(['title', 'body']));
    	// dd(request('title'));

    	// $post = new \App\Post; // \ - begin at the root

    	// validate

    	$this->validate(request(), [

    		// 'title' => 'required|max:10'
    		'title' => 'required',
    		'body' => 'required'

    	]);





    	//Create a new post using the request data

    	// $post = new Post;
    	// $post->title = request('title');
    	// $post->body = request('body');


    	//  Save it to the database
    	// $post->save();

    	Post::create([
    		'title' => request('title'),
    		'body' => request('body')
    		// & make the Post class fillable;
    	]); 	

    	// And the redirect to the homepage.

    	return redirect('/'); 

    }
}
