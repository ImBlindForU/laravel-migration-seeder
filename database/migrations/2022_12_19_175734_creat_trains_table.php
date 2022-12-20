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
        Schema::create('trains', function(Blueprint $table){
            $table->id();
            $table->string('azienda' ,50);
            $table->string('stazione di partenza', 50);
            $table->string('stazione di arrivo',50);
            $table->dateTime('orario di partenza');
            $table->dateTime('orario di arrivo');
            $table->smallInteger('codice treno');
            $table->tinyInteger('numero di carrozze');
            $table->string('in orario' ,10);
            $table->string('cancellato' ,10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
