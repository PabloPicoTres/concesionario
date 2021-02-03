<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Coche extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coche', function (Blueprint $table) {
            $table->id();
            $table->string('urlFoto')->nullable();
            $table->string('marca', 50);
            $table->string('modelo', 100);
            $table->integer('caballos');
            $table->integer('cilindrada');
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
        Schema::dropIfExists('coche');
    }
}
