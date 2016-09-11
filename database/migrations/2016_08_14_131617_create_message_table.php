<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
          Schema::create('message', function (Blueprint $table) {


                    $table->increments('id');
                    $table->text('message');
                    $table->string('sender');
                    $table->string('receiver');
                    $table->string('sending_date');
                    $table->string('imagename');
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
        Schema::drop('message');
    }
}
