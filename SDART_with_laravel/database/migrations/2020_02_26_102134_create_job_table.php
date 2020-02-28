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
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id','job_users_id')
            ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id','job_country_id')
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
            $table->bigInteger('contrat_id')->unsigned();
            $table->foreign('contrat_id','job_contrat_id')
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
