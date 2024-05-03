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
        Schema::create('un_doctor', function (Blueprint $table) {
            $table->increments('D_ID')->nullable();
            $table->string('D_Name');
            $table->string('B_Date');
            $table->string('Field');
            $table->string('Exp_Years');
            $table->integer('Rate')->nullable();
            $table->string('Location');
            $table->string('Phone');
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
