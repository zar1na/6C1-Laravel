<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('owner_id');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
            
            $table->foreign('owner_id')->references('id')->on('users');
            // onDelete('cascade');
            // if user deleted then all their blogs will be 
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
