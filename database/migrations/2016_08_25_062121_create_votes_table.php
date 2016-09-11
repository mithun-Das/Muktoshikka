<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('upvote');
            $table->boolean('downvote');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('ques_id')->unsigned();
            $table->foreign('ques_id')->references('id')->on('question');
            $table->integer('ans_id')->unsigned();
            $table->foreign('ans_id')->references('id')->on('answer');
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blog');
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
          Schema::drop('blog'); 
    }
}
