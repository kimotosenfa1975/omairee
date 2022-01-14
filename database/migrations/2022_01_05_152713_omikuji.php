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
            $table->text('song');
            $table->text('explain');
            $table->text('fortune');
            $table->text('love');
            $table->text('aspiration');
            $table->text('work');
            $table->text('business');
            $table->text('dating');
            $table->text('gambling');
            $table->text('market');
            $table->text('sick');
            $table->text('lost');
            $table->text('job');
            $table->text('marriage');
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
