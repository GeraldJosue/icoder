<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTryOut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('try_out', function (Blueprint $table) {
            $table->increments('try_out_id');
            $table->string('try_out_name', 60);
            $table->integer('category_id')->unsigned();

            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('try_out');
    }
}
