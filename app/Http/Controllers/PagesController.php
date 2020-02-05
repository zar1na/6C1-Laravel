<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $data = [
        'Welcome to Zaz',
        'Here you can sign-up',
        '& create blog posts'
    ];
    
    return view('welcome')->withData($data);
    }
    
    public function pink() {
         return view('pink');
    }
    
    public function blue() {
         return view('blue');
    }
}
