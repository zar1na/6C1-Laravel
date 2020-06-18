<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
        $data = [
    'Welcome to my website',
    'Here I am passing data to a view using the PagesController'
    ];
    return view('welcome')->withData($data);
    }
    
    public function pink() {
        $pink = [
    "Blade is Laravel's templating engine",
    'This means that the layout is consistent throughout the website',
    'I am able to @extend onto the different .blade php files making them clearer to understand'
    ];
    return view('/pink')->withData($pink);
    }
    
    public function blue() {
        $blue = [
    'Using the Routes file, I can link up the view to the route',
    'By registering the different routes, Laravel is able to connect and display the right view'
    ];
    return view('/blue')->withData($blue);
    }
   
}
