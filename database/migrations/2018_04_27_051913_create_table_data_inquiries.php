<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataInquiries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_inquiries', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('emailid')->nullable();
            $table->string('contact_number')->nullable();
            $table->longtext('description')->nullable();
            $table->string('budget')->nullable();
            $table->string('country')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
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
