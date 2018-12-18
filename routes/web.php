<?php

Auth::routes();

route::group(['prifix' => 'admin','middleware' => 'auth'],function(){

	Route::resource('dashboard_admin', 'admin\DashboardConroller');

	Route::resource('production_admin','admin\ProductionConroller'); 

	Route::resource('experts_admin','admin\ExpertsController'); 

	Route::resource('category_admin','admin\CateroryController'); 

	Route::resource('adminUser_admin','admin\UserController'); 

	Route::post('adminUser_admin/{id}','admin\UserController@user_state')->name('update_user'); 

});

// User
Route::resource('dashboard_user','user\dashboardController'); 

Route::resource('forum_user','user\ForumController');

Route::resource('registration_user','user\makeprofileController');

Route::resource('login_user','user\User_loginController');

Route::resource('production_user','user\ProductionController'); 



// Expert
Route::resource('dashboard_expert','expert\DashboardController'); 

Route::resource('forum_expert','expert\forumController');

Route::resource('registration_expert','expert\makeprofileController');

Route::resource('login_expert','expert\Expert_loginController');

Route::resource('userprofile_expert','expert\userprofileController');

