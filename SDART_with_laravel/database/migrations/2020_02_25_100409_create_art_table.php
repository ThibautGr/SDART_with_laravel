<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_typeart')->unsigned();
            $table->foreign('id_typeart','art_typeart_id')
            ->references('id')
                ->on('typeart')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('title',50);
            $table->text('description');
            $table->text('linkImg');
            $table->bigInteger('id_users')->unsigned();
            $table->foreign('id_users','art_users_id')
            ->references('id')
                ->on('users')
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
        Schema::dropIfExists('art');
    }
}
