<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParticipate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_participates_edition', function (Blueprint $table) {
            $table->integer('edition_id')->unsigned();
            $table->integer('person_id')->unsigned();

            $table->foreign('edition_id')
                ->references('edition_id')
                ->on('editions')
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
        Schema::dropIfExists('people_participates_edition');
    }
}
