<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_portfolios', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('app_title')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('category')->nullable();
            $table->string('ide')->nullable();
            $table->string('frontend')->nullable();
            $table->string('country')->nullable();
            $table->string('os_version')->nullable();
            $table->string('backend')->nullable();
            $table->string('rating')->nullable();
            $table->string('description')->nullable();
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
