<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('phone');
            $table->unsignedBigInteger('user_id');
            //create foriegn key caleed user id that refrence on the primary key on users  
            $table->foreign('user_id')->references('id')->
            on('users')->onDelete('cascade');
            $table->softDeletes();




        });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
}
