<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryColumnsToDataPortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_portfolios', function (Blueprint $table) 
        {
            $table->string('android_ide')->after('rating')->nullable();
            $table->string('android_os_version')->after('android_ide')->nullable();
            $table->string('android_frontend')->after('android_os_version')->nullable();
            $table->string('android_client_rating')->after('android_frontend')->nullable();
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
