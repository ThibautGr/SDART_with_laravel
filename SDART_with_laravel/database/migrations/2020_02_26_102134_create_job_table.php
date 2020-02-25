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
            $table->bigInteger('id_users')->unsigned();
            $table->foreign('id_users','job_users_id')
            ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->bigInteger('id_country')->unsigned();
            $table->foreign('id_country','job_country_id')
                ->references('id')
                ->on('country')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->string('title',100);
            $table->decimal('retributionYear',11,2);
            $table->text('studyLevelSkill');
            $table->text('description');
            $table->text('linkImgUn');
            $table->dateTime('forWhen');
            $table->bigInteger('id_contrat')->unsigned();
            $table->foreign('id_contrat','job_contrat_id')
                ->references('id')
                ->on('contrats')
                ->onUpdate('restrict')
                ->onDelete('restrict');
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
