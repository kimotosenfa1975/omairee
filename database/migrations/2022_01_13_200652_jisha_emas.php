<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JishaEmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jisha_emas', function (Blueprint $table) {
            $table->id();
            $table->integer('jisha_id')->nullable()->unsigned()->comment('Jisha ID');
            $table->string('ema')->nullable();
            $table->integer('ema_count')->default(0);
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
        Schema::dropIfExists('jisha_emas');
    }
}
