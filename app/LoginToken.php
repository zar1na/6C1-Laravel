<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class LoginToken extends Model
{
    protected $fillable = ['user_id', 'token'];
    
    public function getRouteKeyName() {
        return 'token'; // static::where('token', $wildcard)
        
    }
    
    public static function generateFor(User $user) {
     return static::create([
     'user_id' => $user->id,
     'token' => str_random(10)
     ]);   
    }
    
    public function send() {
        $url = url('/auth/token', $this->token);
        //auth/token/ random generated token
        
        Mail::raw(
        "Follow the link: $url",
        function ($message) {
            $message->to($this->user->email)
            ->subject('Login');
        });        
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
