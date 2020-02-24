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
            $table->bigInteger('id_users')->unsigned();
            $table->foreign('id_users','mrkt_users_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product','mrkt_art_id')
                ->references('id')
                ->on('art')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->decimal('price',8,2);
            $table->string('matiereSupport',150);
            $table->bigInteger('quantityAvailable');
            $table->bigInteger('id_country')->unsigned();
            $table->foreign('id_country','mrkt_country_id')
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
