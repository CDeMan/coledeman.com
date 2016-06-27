<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShitgenWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shitgen_words', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('word', 50)->unique();
            $table->enum('type', array('noun', 'adj', 'both'));
            $table->timestamps();
            $table->integer('count', false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shitgen_words');
    }
}
