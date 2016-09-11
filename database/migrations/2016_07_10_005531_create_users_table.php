<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {


                    $table->increments('id');
                    $table->string('name');
                    $table->string('email')->unique();
                    $table->string('password', 60);
                    $table->string('joining_date');
                    $table->string('birth_of_date');
                    $table->string('imagename');
                    $table->string('contact_no');
                    $table->string('school_name');
                    $table->string('college_name');
                    $table->string('university_name');
                    $table->string('about');
                    $table->string('fb_link');
                    $table->rememberToken();
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
        Schema::drop('users');
    }
}
