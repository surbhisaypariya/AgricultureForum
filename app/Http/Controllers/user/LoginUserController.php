<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginUserController extends Controller
{
	//use RedirectsUsers, ThrottlesLogins;

	protected $redirectTo = '/dashboard_user';
	protected $guard='user';

    public function showLoginForm()
    {
    	if(view()->exists('auth.authenticate'))
    	{
    		return view('auth.authenticate');
    	}
        return view('user.pages.login');
    }
    public function showRegistrationForm()
    {
    	return view('user.pages.registration_user');
    }

    
}
