<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfEvalutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_evalutions', function (Blueprint $table) {
            $table->id();
           
            $table->string('percentage');
            $table->unsignedBigInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
               
               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('self_evalutions');
    }
}
