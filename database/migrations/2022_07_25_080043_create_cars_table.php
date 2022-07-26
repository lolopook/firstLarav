<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            // creation de table
            $table->id(); // id AI etc .. auto
            $table->string("brand");
            $table->string("serie");
            $table->float("price",10 ,2 ,true);
            $table->string("energy");
            $table->integer("power", false, true);
            $table->date("release_date");
            $table->float("weight");
            $table->string("thumbnail");
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
        Schema::dropIfExists('cars');
    }
};
