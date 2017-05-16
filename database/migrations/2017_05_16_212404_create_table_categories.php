<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name', 50);
            $table->char('gender', 1);
            $table->integer('initial_year');
            $table->integer('final_year');
            $table->integer('sport_id')->unsigned();

            $table->foreign('sport_id')
                ->references('sport_id')
                ->on('sports')
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
        Schema::dropIfExists('categories');
    }
}
