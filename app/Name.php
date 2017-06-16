<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected  $primaryKey = 'name_id';

    protected $fillable = ['first_name', 'last_name', 'surname', 'second_surname'];
}
