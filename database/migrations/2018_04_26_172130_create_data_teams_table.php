<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_teams', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('emailid')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('image')->nullable();
            $table->integer('display_order')->nullable();
            $table->tinyInteger('status')->default(1);
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
        //
    }
}
