<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

class AuthenticatedUser
{
    use ValidatesRequests;
    
    protected $request;
    
    public function __construct(Request $request) {
        $this->request = $request;
    }
    
    public function invite()
    {
        // validate the request
        $this->validateRequest()
        // create a token
        ->createToken()
        // send it to them
        ->send();
    }
    
    public function login(LoginToken $token) {
        // login user with this token
        Auth::login($token->user);
        //delete the token. It's a single use token meaning next time when they login they will hae to check their "emails"
        $token->delete();
    }
    
    protected function validateRequest() {
        $this->validate($this->request, [
        'email' => 'required|email|exists:users'
        ]);
        return $this;
    }
    
    protected function createToken() {
        //User::where('email', $this->request->email)->firstOrFail();
        $user = User::byEmail($this->request->email);
        return LoginToken::generateFor($user);
    }
    
}
