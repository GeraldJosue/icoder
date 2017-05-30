<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Try_Out extends Model
{
    //

	protected $table = 'try_out';

    protected  $primaryKey = 'try_out_id';

    protected $fillable = ['try_out_name', 'category_id'];
}
