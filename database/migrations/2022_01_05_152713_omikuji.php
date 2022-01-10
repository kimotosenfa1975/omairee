<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Omikuji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('omikuji', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->unsigned()->comment('User ID');
            $table->string('song');
            $table->string('explain');
            $table->string('fortune');
            $table->string('love');
            $table->string('aspiration');
            $table->string('work');
            $table->string('business');
            $table->date('date');
            $table->string('gambling');
            $table->string('market');
            $table->string('sick');
            $table->string('lost');
            $table->string('job');
            $table->string('marriage');
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
        Schema::dropIfExists('omikuji');
    }
}
