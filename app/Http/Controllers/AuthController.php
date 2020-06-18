<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AuthenticatedUser;
use App\LoginToken;

class AuthController extends Controller
{
    protected $auth;
    
    public function __construct(AuthenticatedUser $auth) {
        $this->auth = $auth;
    }
    
    public function login() { //create
        
        return view('/auth/LEO');
    }
    
    public function postLogin() { //store
        $this->auth->invite();
        //return 'Sweet, check the logs';
        session()->flash('postLogin', 'Check the log for your email');
        return redirect('/auth/LEO');
    }
    
    public function authenticate(LoginToken $token) { // authenticates user who follow the email
        //dd ($token);
        $this->auth->login($token);
        
       // return auth()->user()->name . ' is signed in.';
        return view('/home');
    }
    
}
