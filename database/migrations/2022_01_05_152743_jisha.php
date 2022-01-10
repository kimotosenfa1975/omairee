<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jisha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('jishas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->LongText('description');
            $table->string('mail');
            $table->string('bankName');
            $table->string('financialName');
            $table->integer('accountNumber');
            $table->string('branch');
            $table->tinyInteger('checked');
            $table->string('img');
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
        Schema::dropIfExists('jishas');
    }
}
