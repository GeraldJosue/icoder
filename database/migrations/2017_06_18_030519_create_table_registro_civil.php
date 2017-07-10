<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRegistroCivil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_civil', function (Blueprint $table) {

            $table->increments('rc_id');
            $table->integer('rc_dni');
            $table->string('rc_name', 25);
            $table->string('rc_middlename', 25);
            $table->string('rc_firstname', 25);
            $table->string('rc_lastname', 25);
            $table->string('rc_nationality', 75);
            $table->date('rc_birthdate');
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
        Schema::dropIfExists('Registro_Civil');
    }
}
