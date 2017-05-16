<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('names', function (Blueprint $table) {
            $table->increments('name_id');
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('surname', 20);
            $table->string('second_surname', 20);
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
        Schema::dropIfExists('names');
    }
}
