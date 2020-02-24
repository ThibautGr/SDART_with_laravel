<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_users')->unique();
            $table->unsignedBigInteger('id_art')->unique();
            $table->string('title',100);
            $table->string('description');
            $table->string('support');
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
        Schema::dropIfExists('tutorial');
    }
}
