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
            $table->integer('artPratice');
            $table->integer('levelAdminUser',1);
            $table->string('mail',150)->unique();
            $table->string('entreprise',150)->nullable();
            $table->unsignedBigInteger('id_country')->unique();
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
