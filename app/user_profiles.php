<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_profiles extends Model
{
    protected $fillable =['name','address','email','mobile_no','test_reports','seeds_use','username','photo','password',];

	protected $hidden = ['remember_token',];
}
