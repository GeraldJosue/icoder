<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('photo_id');
            $table->string('url_personal_photo', 100)->nullable();
            $table->string('url_front_photo', 100)->nullable();
            $table->string('url_back_photo', 100)->nullable();
            $table->string('url_enroll_form', 100)->nullable();
            $table->string('url_cantonal_pass', 100)->nullable();
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
        Schema::dropIfExists('photos');
    }
}
