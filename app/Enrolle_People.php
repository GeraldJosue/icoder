<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrolle_People extends Model
{
    protected  $primaryKey = 'person_id';

    protected $fillable = ['person_email', 'tel_number', 'height', 'weight', 'blood_type', 'name_id', 'address_id', 'sport_id', 'canton_id', 'photo_id', 'user_rol_id', 'category_id'];
}
