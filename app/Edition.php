<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    
    protected  $primaryKey = 'edition_id';

    protected $fillable = ['edition_name', 'year', 'place', 'initial_date', 'final_date'];
}
