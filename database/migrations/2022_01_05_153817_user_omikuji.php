<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserOmikuji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_omikuji', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->unsigned()->comment('User ID');
            $table->integer('omikuji_id')->nullable()->unsigned()->comment('omikuji ID');
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
        Schema::dropIfExists('user_omikuji');
    }
}
