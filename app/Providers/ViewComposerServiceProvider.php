<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Recipe;

class ViewComposerServiceProvider extends ServiceProvider {

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



/**
* Compose the navigation bar.
*
*/
	private function composeNavigation()
	{
		view()->composer('layouts.nav', function($view)
		{
			$view->with('latest', Recipe::latest()->first());
		});
	}

}
