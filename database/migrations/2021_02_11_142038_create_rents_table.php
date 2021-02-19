<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->unsignedBigInteger('fk_movie');
            $table->foreign('fk_user')->references('id')->on('users');
            $table->foreign('fk_movie')->references('id')->on('movies');
            $table->boolean('status');
            $table->decimal('date_rent', 10, 0);
            $table->decimal('date_return', 10, 0)->nullable();
            $table->text('late_indication');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
