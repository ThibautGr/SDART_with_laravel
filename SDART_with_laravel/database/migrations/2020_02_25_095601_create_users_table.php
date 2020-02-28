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
            $table->string('password',255);
            $table->text('description');
            $table->bigInteger('typeart_id')->unsigned();
            $table->foreign('typeart_id','users_typeart_id')
            ->references('id')
                ->on('typeart')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->bigInteger('levelAdminUser');
            $table->string('email',150)->unique();
            $table->string('entreprise',150)->nullable();
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id','country_user_id')
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
