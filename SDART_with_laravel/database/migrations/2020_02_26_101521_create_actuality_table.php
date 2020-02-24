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
            $table->text('description');
            $table->text('linkImgUn');
            $table->text('linkImgDeux');
            $table->text('linkImgTrois');
            $table->bigInteger('id_users')->unsigned();
            $table->foreign('id_users','actuality_users_id')
            ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->bigInteger('id_art')->unsigned();
            $table->foreign('id_art','art_actuality_id')
            ->references('id')
                ->on('art')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
