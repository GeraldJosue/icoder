<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected  $primaryKey = 'category_id';

    protected $fillable = ['category_name', 'gender', 'initial_year', 'final_year', 'sport_id'];
}