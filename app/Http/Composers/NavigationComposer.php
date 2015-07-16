<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class NavigationComposer {

	public function __construct(RecipesRepository $recipes)
	{

	}

	public function compose(View $view)
	{
/*		$view->with('latest', \App\Recipe::latest()->first());
*/
		$view->with('latest', $this->recipes->ofSomeType());
	}
}

