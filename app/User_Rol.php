<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Rol extends Model
{
    //
    protected $table = 'user_rols';

    protected  $primaryKey = 'user_rol_id';

    protected $fillable = ['user_rol_name'];
}
