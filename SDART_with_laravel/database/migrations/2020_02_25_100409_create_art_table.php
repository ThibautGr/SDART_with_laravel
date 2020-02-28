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
            $table->bigInteger('typeart_id')->unsigned();
            $table->foreign('typeart_id','art_typeart_id')
            ->references('id')
                ->on('typeart')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('title',50);
            $table->text('description');
            $table->text('linkImg');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id','art_users_id')
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
