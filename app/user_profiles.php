<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user_profiles extends Model
{
	use Notifiable;

	protected $guard = 'user';

    protected $fillable =['name','address','email','mobile_no','test_reports','seeds_use','username','photo','password',];

	protected $hidden = ['remember_token',];
}
