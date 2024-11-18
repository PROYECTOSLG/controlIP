<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetwork212Table extends Migration
{
    public function up()
    {
        Schema::create('network212', function (Blueprint $table) {
            $table->id(); // ID como llave primaria
            $table->string('NO_EMPLOYEE');
            $table->string('NAME')->nullable();
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

    public function down()
    {
        Schema::dropIfExists('network212');
    }
}
