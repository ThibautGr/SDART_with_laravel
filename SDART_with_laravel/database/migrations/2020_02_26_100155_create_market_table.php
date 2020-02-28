<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id','mrkt_users_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id','mrkt_art_id')
                ->references('id')
                ->on('art')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->decimal('price',8,2);
            $table->string('matiereSupport',150);
            $table->bigInteger('quantityAvailable');
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id','mrkt_country_id')
                ->references('id')
                ->on('country')
                ->onDelete('restrict')
                ->onUpdate('restrict');

        });
    }
    /*
     CREATE TABLE `market` (
  `idVente` int PRIMARY KEY AUTO_INCREMENT,
  `idUser` int,
  `idProduct` int,
  `price` decimal(11,2),
  `description` text,
  `matiereSupport` varchar(150),
  `quantityAvailable` int(11),
  `idCountry` int
);
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('market');
    }
}
