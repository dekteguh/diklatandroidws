<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKotakabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kabkota', function(Blueprint $table){
        $table->increments('id');
        $table->string('nama',100);
        $table->integer('prop_id');
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
        Schema::drop('kabkota');
    }
}
