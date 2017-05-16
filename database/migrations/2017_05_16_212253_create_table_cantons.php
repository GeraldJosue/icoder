<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCantons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantons', function (Blueprint $table) {
            $table->increments('canton_id');
            $table->string('canton_name', 30);
            $table->integer('province_id')->unsigned();

            $table->foreign('province_id')
                ->references('province_id')
                ->on('provinces')
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
        Schema::dropIfExists('cantons');
    }
}
