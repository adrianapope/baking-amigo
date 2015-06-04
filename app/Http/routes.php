<?php

# Home

Route::get('/', 'PageController@index');
Route::get('home', 'HomeController@index');

# Pages

Route::get('contact', 'PageController@contact');
Route::get('about', 'PageController@about');
Route::get('terms', 'PageController@terms');
Route::get('privacy', 'PageController@privacy');

# Recipes

Route::get('/recipes/create', 'RecipesController@create');
Route::post('recipes', 'RecipesController@store');
Route::get('recipes', 'RecipesController@index');
Route::get('recipes/{id}', 'RecipesController@show');

# Auth

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
