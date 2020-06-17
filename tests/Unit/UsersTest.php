<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
   // working with the colab class directly
    public function user_can_colab() {
        $user = factory('App\User')->create();
        $user->colab()->create(['name' => 'Acme']);
        // user_id already created by eloquent
        
        $this->assertEquals('Acme', $user->colab->name);
    }
}
