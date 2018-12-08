<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
	protected $table='answers';

    protected $fillable =['user_id', 'category_id', 'question',];

	protected $hidden = ['remember_token',];

}
