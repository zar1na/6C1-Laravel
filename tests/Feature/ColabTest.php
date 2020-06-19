<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ColabTest extends TestCase
{
    //use RefreshDatabase; 
    // after every test if the database state is changed then it will reset/refresh and get rid of anything done here
    // automatically runs migrations
    
    /** @test */
    public function guests_no_colab() {
       // $this->withoutExceptionHandling();
        
        $this->post('/colabs')->assertRedirect('/login');
    }
    
    /** @test */
    public function a_user_can_colab() // database transaction
    { //given, when and then to tell the story clearly
        
        $this->withoutExceptionHandling(); // Laravel doesn't catch or accept any exception handling. Can be removed after the test turns green
        
        // Given that I am a user who is logged in
        $this->actingAs(factory('App\User')->create());
        // actingAs this user I've just created
        $attributes = ['name' => 'Acme'];
        // When they hit the end point /colab to create a new colab while passing through the necessary data
       $this->post('/colabs', $attributes);
        
        // Then there should be a new colab in the database
       $this->assertDatabaseHas('colabs', $attributes);
    }
}
