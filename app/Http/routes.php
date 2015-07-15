<?php

use App\Events\UserWasBanned;


// repository example workflow
// we'll create a new controller here.

Route::get('foo', 'FooController@foo');


/*interface BarInterface {}
*/
/*class Baz {} */
/*
class Bar implements BarInterface {}
class SecondBar implements BarInterface {}*/

// the SecondBar class
// App::bind('BarInterface', 'SecondBar');

/// the Bar class
/*App::bind('BarInterface', 'Bar');
*/

// 1st way of doing this route closure
// building something up on your own
/*Route::get('bar', function() {
	$bar = App::make('BarInterface');

	dd($bar);
});*/

// 2nd way of doing this route closure
// different syntax but is the same thing instead of App:: you can do app()->
/*Route::get('bar', function() {
	$bar = app()->make('BarInterface');
});*/

// 3rd way of doing this route closure
// you can also reference it as an array
// instead of App::make you would do []
// the container implements "array access" which is an interface that defines how you would access something as an array 
/*Route::get('bar', function() {
	$bar = app()['BarInterface'];
	dd($bar);
});
*/
// 4th way of doing this route closure
// pass it as an argument
// if you peak into the function "app"
// function app($make = null) { if ( ! is_null($make)) { return app()->make($make); } return Illuminate\Container\Container::getInstance(); }
// you'll notice that if we pass an argument
// laravel will assume oh you are trying to resolve something so laravel will call app()->make for you
// but if you don't pass anything in there, laravel will just give you the current container

/*Route::get('bar', function() {
	$bar = app('BarInterface');
});
*/


/*Route::get('bar', function(BarInterface $bar) {

	dd($bar);

});*/

/*	public $baz;

	public function __construct(Baz $baz)
	{
		$this->baz = $baz;
	}
}*/

// here we are manually binding something into the container
// if there is any a point where you need access to an some object (some dependency)
// the problem is that dependecny has to be constructed in a speicifc way. you have to give it an API key, you have to igve it some other kind of depenency 
// once again, you don't have to prepare that instantiation over and over
// so you do it once and you bind it to laravel's service container or you might see it called IoC container
// that way whenever you need it (in classes that are resolved out of the service container) you just type hint what you want like (Bar $bar) and
// laravel will give you exactly what you specified
// and even if this specific binding didn't exist, we still get the exact same thing. becuase on the condition that we haven't manually bound anything
// to the container, laravel can still fallback to using "Reflection" to build this up for you.
// here are some other things this might be helpful for: imagine you don't want to manually type hint a concrete class,
// maybe you are building a package or something like that and you would prefer to reference an interface
// in order for my class to work, i need some kind of implementation of this interface.
// how might we manage that? let's say we expect some sort of implementation of BarInterface
// we get the error Target [BarInterface] is not instantiable
// imagine we create a binding our selves . remember that 'BarInterface' is just a key that we are using for the container
// so we'll return new Bar; and we'll have to make sure that it implements BarInterface
// if we refresh our browser, it now works because we manually added a binding into the container
// when laravel calls this closure, laravel will see that we are requesting some sort of BarInterface object and first it's going to look inside
// of its containder and see if there is anything that matches that. (like searching in a backpack for anything that has an identifer or key or name of BARINTERFACE, if that is then that must be what we want)
// so let's just return whatever is associated withit.
// but for the situations where we don't have that binding, once again we get error Target [BarInterface] is not instantiable
// because again it looks for BarInterface and it looks within the backpack or the container and says do i have anything that looks like that? no there is nothing there that matches BarInterface
// so next laravel tries to build up the obejct for you but once it inspects this, it will realize that it is an interface and it can't instantiate an  interface. php doesn't allow that.
// so what do i do? i don't know! so im going to throw an exception to let the user know that you gave me an interface here but 
// there is no binding in the container so i have no clue what to do here- -that is what this message means here
// so if you see this, you have to tell laravel, well when i typehint this contract (or this interface) this is the actual concrete class that i want to associate with it
// you do that by doing App::bind('BarInterface', 'Bar'); and passing a string.
// when you need an implementation of BarInterface, i want you to give me the Bar class.
// or if there is another one that you want to use instead you would just add it (such as SecondBar) and then you just update your binding
// and now throughout your entire application, whereever you requested an object that adheres to that contract, well now 
// throughout the entire application, you'll be getting SecondBar rather than Bar.
// you only had to change one string here to have that reflected everywhere.
// as soon as we typehinted it, laravel built up the object for us automatically like magic.
// there may be situations where you'll need to build stuff up yourself. so how do we do this?
// let's say $bar = App::make
// and then we have App::make for resolving it out of the container
// so we have App::bind for binding something into the container
// you bind into the container, and then when you want it back, you resolve it out of the container
//

/*App::bind('Bar', function()
{
	dd('fetching');
	return new Bar(new Baz);
});*/




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

# Events

// we will fire an event.
// pass it through as a string, then pass through your data
/*Route::get('/', function () {
	Event::fire('UserWasBanned', [])
});*/

// second way of doing this (the newest way)
// i like using objects
// new up a class and then pass through whatever it needs through the constructor
// we can use the helper function event() which just delegates to app(events)->fire anyways
// we imported class use App\Events\UserWasBanned;
// if we ban a use, we need to pass through the user who was banned.
// when you want to fire an event or make an announcement that something just took place, you reference
// your event function and then you new up the event object thatyou created, then you can pass through anything that it requires. often it will be just an id or something
// behind the scenes, laravel will take care of the rest
// so if we go to chrome, recipes.app:8000 we'll get string 'Notify  that they have banned from the site.' (length=44)
// we fired the event and becuase we had a listener registered on it, this class was instantiated or resolved out of the container ('EmailBanNotification')
// and then a handle method was triggered. var_dump('Notify ' . $event->user->name . ' that they have banned from the site.');
// event fired (UserWasBanned) -> listener instantiated (EmailBanNotification) -> handle method triggered 	public function handle(UserWasBanned $event)

Route::get('/', function() {

	$user = new App\User;

	event(new UserWasBanned($user));

});

# App Function (Illuminate Contracts/Interfaces)
/*dd(Config::get('database.default'));
dd(app('Illuminate\Config\Repository')['database']['default']);
dd(app('Illuminate\Contracts\Config\Repository')['database']['default']);
dd(app('config')['database']['default']);
dd(app()['config']['database']['default']);
*/

// general info. five different ways listed below on how to fetch our configuration compositories
// app is a helper function that is a nice wrapper around app($make)
// it use to be App::make() but now it's just app() you just pas in the name of the identifier or the class as a string that you want to sesolve
// you can refer to the concrete class or the contract if you need to be as coupled as possible.

// here we are using the Config facade. simple way
// not locked to any specific driver or implementation.
// maximum decoupling.
// we get mysql in the browser
/*Route::get('/', function() {
	dd(Config::get('database.default'));
});*/

// here we will reference the actual concrete class. how? we know it is Illuminate\Config\Repository and so the concrete class is 
// class Repository of this particular contract called ConfigContract
// what you see here is one way of fetching configuration and it happens to be the default way in laravel. you don't need to really change it ever.
// if you wanted a custom way of dealing with configuration... what would you do?
// to use your own config methodology...if we use this concept of contracts and interfaces (if we think about in terms of these bindings) you could create your own class that adheres to this specific contract
// and then as part of your bootstrap process, you only need to hook into laravel and tell it whenever you need an implementation of this contract, use this custom one that i have built
// when it needs to fetch config, it will use yours and not the default one
// that means to fetch the default driver you just have to tack on ['database']['default'] and you'll get 'mysql' in the browser
/*Route::get('/', function() {

	dd(app('Illuminate\Config\Repository')['database']['default']); // this is a concrete class Repository
});*/

// here we are using an interface/contract
// we are referencing a contract, or an abstract key, it's really just an identifier
// if you are ever wondering where the Contracts should go, you just append Contracts after Illuminate and it will be the exact same thing 
// vis versa, if you take off Contracts, you can most likely find one of the concrete implementation at Illuminate\Config\Repository
// we want to use this interface Repository.php (look for Contracts/Config/Repository)
// if i were to build this up, and then die and dump it and view in chrome...what happens? we get all the attributes listed
// for some large projects, you want some very clearly defined interfaces and boundries. so in those cases and when and only if it makes sense for your project
// that means to fetch the default driver you just have to tack on ['database']['default'] and you'll get 'mysql' in the browser
/*Route::get('/', function() {

	dd(app('Illuminate\Contracts\Config\Repository')['database']['default']);
});*/

// fourth way of doing this is to reference a general key word('config')
// once again we get the same exact thing mysql in the browser
/*Route::get('/', function() {
	dd(app('config')['database']['default']);
});*/

// fifth way
// imagine we already have an $app instance (which we don't here) so we can just do (app()) like that
// and then we can use the ArrayAccess feature of php which laravel's container implements
// if you look at Container.php you will see that it implements ArrayAccess
// that means when you try to access a key on the app object (in this case) it will call an offsetGet() and you are passing in $config as the key
// so it is basically going to be doing something like this app make the key app($key); or App:make($key); or we passed in config so App::make('config');
// it implements ArrayAccess to make it easy for us to use
/*Route::get('/', function() {
	dd(app()['config']['database']['default']);
});*/


# Controller with Illuminate Contracts

// create a controller and figure out just the basic. how do we request an interface and receive it automatically
Route::get('test', 'WelcomeController@test');


