<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{

    protected  $primaryKey = 'canton_id';

    protected $fillable = ['canton_name', 'province_id'];

}
