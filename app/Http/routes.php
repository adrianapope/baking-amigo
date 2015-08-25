<?php

# Home
/*Route::get('/test', function() {
	$img = Image::make('img/slice-of-cake.jpg')->crop(200, 200)->save('img/test123.jpg');

	echo "<img src='img/test123.jpg'>";
});*/
Route::get('/', 'PageController@index');
Route::get('home', 'HomeController@index');

# Pages

Route::get('contact', 'PageController@contact');
Route::get('about', 'PageController@about');
Route::get('terms', 'PageController@terms');
Route::get('privacy', 'PageController@privacy');


# Recipes
/*
Route::get('recipes', 'RecipesController@index');
Route::get('/recipes/create', 'RecipesController@create');
Route::get('recipes/{id}', 'RecipesController@show');
Route::post('recipes', 'RecipesController@store');
Route::get('recipes/{id}/edit', 'RecipesController@edit');
Route::post('recipes/{id}', ['as' => 'recipes.update', 'uses' => 'RecipesController@update']);*/


#Comments
Route::group(['middleware' => 'auth'], function () {
	Route::post('/recipes/{id}/comments', 'CommentsController@store');
});


# Recipes

Route::resource('recipes', 'RecipesController');

# Tags

Route::get('tags/{tags}', 'TagsController@show');




# Auth

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

# Middleware

Route::get('foo', ['middleware' => 'manager', function()
{
    return 'this page may only be viewed by managers';
}]);

# Profile
Route::get('/users/{profile}', 'ProfilesController@show');
Route::get('/users/{profile}/edit', 'ProfilesController@edit');
Route::post('/users/{profile}/update', 'ProfilesController@update');



