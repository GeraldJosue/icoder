<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected  $primaryKey = 'photo_id';

    protected $fillable = ['url_personal_photo','url_front_photo','url_back_photo','url_enroll_form','url_cantonal_pass'];
}
