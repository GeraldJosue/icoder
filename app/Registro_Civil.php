<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro_Civil extends Model
{
    //
	protected $table = 'registro_civil';

    protected  $primaryKey = 'rc_id';

    protected $fillable = ['rc_dni', 'rc_name', 'rc_middlename', 'rc_firstname', 'rc_lastname', 'rc_birthdate', 'rc_nationality'];
}
