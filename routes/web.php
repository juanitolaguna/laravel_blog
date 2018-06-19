<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// use namespaces
use App\Task;

// intro

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


//blog

Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');






// Route::get('/tasks', function () {
// 	// $tasks = DB::table('tasks')->latest()->get();
// 	//Eloquent
// 	$tasks = Task::all();
//     return view('tasks.index', compact('tasks'));
// });


// Route::get('/tasks/{task}', function ($id) {

// 	// $task = DB::table('tasks')->find($id);

// 	//Eloquent
// 	$task = Task::find($id);
//     return view('tasks.show', compact('task'));
// });



Route::get('/about', function() {
	return view('about');
});

