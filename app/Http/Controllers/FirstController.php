<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //to view file
    public function first_view(){
    	return view('file1');
    }
}
