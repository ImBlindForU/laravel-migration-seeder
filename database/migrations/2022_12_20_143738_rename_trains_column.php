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
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('stazione di partenza', 'stazione_di_partenza');
            $table->renameColumn('stazione di arrivo', 'stazione_di_arrivo');
            $table->renameColumn('orario di partenza', 'orario_di_partenza');
            $table->renameColumn('orario di arrivo', 'orario_di_arrivo');
            $table->renameColumn('codice treno', 'codice_treno');
            $table->renameColumn('numero di carrozze', 'numero_di_carrozze');
            $table->renameColumn('in orario', 'in_orario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
