<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2014_10_12_100000_create_emprunts_table.php
class CreateEmpruntsTable extends Migration
=======
class CreateCartsTable extends Migration
>>>>>>> Yasmine:database/migrations/2021_02_11_142028_create_carts_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2014_10_12_100000_create_emprunts_table.php
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->integer('id_utilisateur');
=======
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_movie');
            $table->boolean('satus_cart');
>>>>>>> Yasmine:database/migrations/2021_02_11_142028_create_carts_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD:database/migrations/2014_10_12_100000_create_emprunts_table.php
        Schema::dropIfExists('emprunts');
=======
        Schema::dropIfExists('carts');
>>>>>>> Yasmine:database/migrations/2021_02_11_142028_create_carts_table.php
    }
}
