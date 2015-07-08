<?php

/*Route::get('/test', function()
{
    $recipe = App\Recipe::whereId(42)->with('tags')->first();

    $recipe->tags()->sync([1, 2, 3, 5]);
    return dd($recipe);
});*/

# Home

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

# Recipes

Route::resource('recipes', 'RecipesController');

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

