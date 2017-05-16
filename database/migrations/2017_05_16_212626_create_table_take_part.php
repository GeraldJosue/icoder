<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTakePart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_take_part_try_out', function (Blueprint $table) {
            $table->integer('try_out_id')->unsigned();
            $table->integer('person_id')->unsigned();

            $table->foreign('try_out_id')
                ->references('try_out_id')
                ->on('try_out')
                ->onDelete('cascade');

            $table->foreign('person_id')
                ->references('person_id')
                ->on('enrolle_people')
                ->onDelete('cascade');

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
        Schema::dropIfExists('people_take_part_try_out');
    }
}
