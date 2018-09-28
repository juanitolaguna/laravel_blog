<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
    	return view('sessions.create');
    }

    public function destroy() {

    	auth()->logout();

    	return redirect()->home();

    }

    public function store() {
    	//Attempt tho authenticate the user.

    	//IF not, redirect back.

    	//If so, sign them in.


    	//redirect


    }
}
