<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Coin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('coin', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable()->unsigned()->comment('User ID');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('remained')->default(0);
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
        Schema::dropIfExists('coin');
    }
}
