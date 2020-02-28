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
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id','actuality_users_id')
            ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->bigInteger('art_id')->unsigned();
            $table->foreign('art_id','art_actuality_id')
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
