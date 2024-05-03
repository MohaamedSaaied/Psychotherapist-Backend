<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('user', function (Blueprint $table) {
            $table->increments('P_ID')->nullable();
            $table->string('P_Name');
            $table->string('Gender');
            $table->string('B_Date');
            $table->string('Record')->nullable();
            $table->string('username')->unique();
            $table->longtext('password');
            $table->string('img')->nullable();
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
};
