<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_users')->unique();
            $table->unsignedBigInteger('id_country')->unique();
            $table->string('title',100);
            $table->decimal('retributionYear',11,2);
            $table->string('studyLevelSkill');
            $table->string('description');
            $table->string('linkImgUn');
            $table->dateTime('forWhen');
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
        Schema::dropIfExists('job');
    }
}
