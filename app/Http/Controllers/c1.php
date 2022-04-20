<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c1 extends Controller
{
    public function index(){
    	return view('pages.index');
    	//return 'Welcome';
    }
    
}
