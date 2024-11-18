<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            $table->id(); // Añadir ID como llave primaria
            $table->string('IP')->unique();
            $table->string('STATUS');
            $table->string('INNO')->nullable();
            $table->string('PROJECT')->nullable();
            $table->string('AREA')->nullable();
            $table->string('PROCESS')->nullable();
            $table->string('TYPE')->nullable();
            $table->string('PERSON_IN_CHARGE')->nullable();
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
        Schema::dropIfExists('networks');
    }
}
