<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{


    public function __construct(){

        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        $posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));	

    }

    public function show($id) {
        $post = Post::find($id);
    	return view('posts.show', compact('post'));
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


        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );



    	//Create a new post using the request data

    	// $post = new Post;
    	// $post->title = request('title');
    	// $post->body = request('body');


    	//  Save it to the database
    	// $post->save();

        

        /* replaced by auth helper function

    	Post::create([
    		'title' => request('title'),
            'body' => request('body'),
    		'user_id' => auth()->id()

    		// & make the Post class fillable;
    	]); 
        */	

    	// And the redirect to the homepage.

    	return redirect('/'); 

    }
}
