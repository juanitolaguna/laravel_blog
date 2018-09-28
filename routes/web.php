<?php

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show');



Route::post('/posts/{post}/comments', 'CommentsController@store');




Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');



Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');





//make resourceful controller -boilerplate for all CRUD Methods

//php artsan make:controller PostsController -r






//posts

//GET /posts

//Get /posts/create

//POST /posts -> write to db

//GET /posts/{id}/edit

//GET /posts/{id}

// PATCH /posts/{id}

//DELETE /posts/{id}













// Route::get('/posts/{post}', 'PostController@show');

//Controller => Posts

//Eloquent Model => Post

//Migration => create_posts_table






//php artisan make:controller PostsController 

// php artisan make:model Post

//php artisan make:migration create_posts_table --create=post



//or (php artisan help make:modell -> see the flags)

// php artisan make:model Post -mc




//edit migration
//php artisan