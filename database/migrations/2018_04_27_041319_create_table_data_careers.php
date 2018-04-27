<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_careers', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('experience')->nullable();
            $table->longtext('description')->nullable();
            $table->string('location')->nullable();
            $table->string('icon')->nullable();
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
