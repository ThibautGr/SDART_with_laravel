<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName',50);
            $table->string('lastName',50);
            $table->string('pseudo',50);
            $table->string('inconLink',150);
            $table->string('password',50);
            $table->text('description');
            $table->bigInteger('id_typeart')->unsigned();
            $table->foreign('id_typeart','users_typeart_id')
            ->references('id')
                ->on('typeart')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->bigInteger('levelAdminUser');
            $table->string('mail',150)->unique();
            $table->string('entreprise',150)->nullable();
            $table->bigInteger('id_country')->unsigned();
            $table->foreign('id_country','country_user_id')
            ->references('id')
                ->on('country')
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
        Schema::dropIfExists('users');
    }
}
