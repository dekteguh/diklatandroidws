<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pendidikan', function(Blueprint $table){
        $table->increments('id');
        $table->integer('prop_id');
        $table->integer('kabkota_id');
        $table->integer('jenjang_id');
        $table->integer('jml_laki');
        $table->integer('jml_pr');
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
        Schema::drop('pendidikan');
    }
}
