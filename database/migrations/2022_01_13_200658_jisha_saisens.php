<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JishaSaisens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jisha_saisens', function (Blueprint $table) {
            $table->id();
            $table->integer('jisha_id')->nullable()->unsigned()->comment('Jisha ID');
            $table->string('saisen');
            $table->integer('saisen_count');
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
        Schema::dropIfExists('jisha_saisens');
    }
}
