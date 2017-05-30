<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    //

	protected  $primaryKey = 'sport_id';

    protected $fillable = ['sport_name', 'sport_type', 'max_num'];
}
