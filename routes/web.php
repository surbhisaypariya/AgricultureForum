<?php

// Route::get('/', function () {
//     // return view('welcome');
//     return view('expert.pages.dashboard_expert');
// });

Route::resource('dashboard_admin', 'admin\DashboardConroller');

Route::resource('production_admin','admin\ProductionConroller'); 

Route::resource('experts_admin','admin\ExpertsController'); 

Route::resource('category_admin','admin\CateroryController'); 

Route::resource('adminUser_admin','admin\UserController'); 



Route::resource('dashboard_user','user\dashboardController'); 

Route::resource('forum_user','user\ForumController');

Route::resource('makeprofile_user','user\makeprofileController');

Route::resource('production_user','user\ProductionController'); 



Route::resource('dashboard_expert','expert\DashboardController'); 

Route::resource('forum_expert','expert\forumController');

Route::resource('makeprofile_expert','expert\makeprofileController');

Route::resource('userprofile_expert','expert\userprofileController');