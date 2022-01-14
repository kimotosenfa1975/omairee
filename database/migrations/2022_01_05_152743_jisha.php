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
            $table->bigInteger('user_id')->nullable()->unsigned()->comment('User ID');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->LongText('description')->nullable();
            $table->string('mail')->nullable();
            $table->string('bankName')->nullable();
            $table->string('financialName')->nullable();
            $table->integer('accountNumber')->nullable();
            $table->string('branch')->nullable();
            $table->tinyInteger('checked')->default(0);
            $table->string('img')->nullable();
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
