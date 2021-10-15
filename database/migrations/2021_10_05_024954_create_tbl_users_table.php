<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('district_id');
            $table->string('type');
            $table->string('user_mbf');
            $table->string('password');
            $table->string('emp_code');
            $table->string('ez');
            $table->string('phone');
            $table->string('email');
            $table->string('ward');
            $table->date('DOB');
            $table->date('Work_Start');
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
        Schema::dropIfExists('tbl_users');
    }
}
