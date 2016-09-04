<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table){
           // our schema is defined in here 
           $table->increments('id');
           $table->string('name');
           $table->string('last_name');
           $table->string('address');
           $table->string('phone');
           $table->string('height');
           $table->string('weight');
           $table->text('father');
           $table->text('mother');
           $table->boolean('diabetis');
           $table->boolean('hiper');
           $table->text('other');
           $table->boolean('alcohol');
           $table->boolean('tabaco');
           $table->boolean('drug');
           $table->text('diagnostic');
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
        Schema::drop('history');
    }
}
