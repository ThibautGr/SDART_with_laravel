<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuality', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',50);
            $table->string('description');
            $table->string('linkImgUn');
            $table->string('linkImgDeux');
            $table->string('linkImgTrois');
            $table->string('title',50);
            $table->unsignedBigInteger('id_users')->unique();
            $table->unsignedBigInteger('id_art')->unique();
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
        Schema::dropIfExists('actuality');
    }
}