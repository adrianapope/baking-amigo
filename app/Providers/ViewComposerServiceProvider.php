<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Recipe;

class ViewComposerServiceProvider extends ServiceProvider {

		// this will act as a dedicated home for our view composers 
		//something that gets called after all of the service providers have been registered.
		// once  everything is ready to go, call the boot method on these providers and do whatever you need to do
		// in this case we want to call register a view composer
		// the view name that we want to compose is 'layouts.nav'. next i can reference a class here or we can use a closure
		// so when laravel is composing the view called layouts.nav, then pass through the view object here and i want to bind some
		// stuff to that view. 
		// we will says view with latest recipe
		// we imported the class \App\Recipe so now you'll see it up top as a namespace
		// we created our first view composer
		// becuase that variable is now bound to that navigation view (rather than from a specific controller view)
		// it's going to work anywhere that we pull in the navigation area
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()

	{
		$this->composeNavigation();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}


// there may be some instances when it's not as easy as a quick call like this Recipe::latest()->first()
// you might need to some calculations and you really need a handful of methods to figure it out
// in those situations, it kind of stinks to muddy up your service provider
// its not really the job of your service provider to have all that stuff
// instead you can do view->composer and this time you are not going to pass a closure, im going to pass
// some sort of class path as a string. and then behind the scences laravel will detect oh they are trying
// to resolve a class out of my service container so i will build that up and i will trigger a specific method on it
// for example maybe we have a 'Composers' directory and we'll call that 'NavigationComposer'
// laravel will build up this object for us and it will trigger a method on it called @compose
// let's create a Composers directory under Http and then within there a class called NavigationComposer


/**
* Compose the navigation bar.
*
*/
	private function composeNavigation()
	{
		// this is if you want to do something more complicated like using multiple methods (see above)
		//view()->composer('layouts.nav', 'App\Http\Composers\NavigationComposer@compose');

		view()->composer('layouts.nav', function($view)
		{
			$view->with('latest', Recipe::latest()->first());
		});
	}

}
