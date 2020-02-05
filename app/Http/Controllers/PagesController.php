<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
        $data = [
    'Welcome to Zaz',
    'Here I am passing data to a view'
    ];
    return view('welcome')->withData($data);
    }
    
    public function pink() {
    return view('/pink');
    }
    
    public function blue() {
    return view('/blue');
    }
   
}
