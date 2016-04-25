<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propinsi', function(Blueprint $table){
          $table->increments('id');
          $table->string('nama',100);
          $table->double('latitude');
          $table->double('longitude');
          $table->timestamps('create_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('propinsi');
    }
}
