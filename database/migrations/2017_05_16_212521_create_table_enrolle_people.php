<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEnrollePeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolle_people', function (Blueprint $table) {
            $table->increments('person_id');
            $table->string('person_email', 50);
                $table->integer('tel_number');
                $table->integer('height');
                $table->integer('weight');
                $table->string('blood_type', 3);

                $table->integer('name_id')->unsigned();
                $table->integer('address_id')->unsigned();
                $table->integer('sport_id')->unsigned();
                $table->integer('canton_id')->unsigned();
                $table->integer('photo_id')->unsigned();
                $table->integer('user_rol_id')->unsigned();
                $table->integer('category_id')->unsigned();

                $table->foreign('name_id')->references('name_id')->on('names')->onDelete('cascade');
                $table->foreign('address_id')->references('address_id')->on('addresses')->onDelete('cascade');
                $table->foreign('sport_id')->references('sport_id')->on('sports')->onDelete('cascade');
                $table->foreign('canton_id')->references('canton_id')->on('cantons')->onDelete('cascade');
                $table->foreign('photo_id')->references('photo_id')->on('photos')->onDelete('cascade');
                $table->foreign('user_rol_id')->references('user_rol_id')->on('user_rols')->onDelete('cascade');
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
        Schema::dropIfExists('enrolle_people');
    }
}
