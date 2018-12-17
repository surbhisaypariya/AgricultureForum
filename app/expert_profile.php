<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expert_profile extends Model
{
    protected $fillable =['name','address','mobile_no','email','category','degree_certificate','username','password','photo',];

	protected $hidden = ['remember_token',];
}
