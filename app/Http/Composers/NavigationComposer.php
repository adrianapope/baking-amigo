<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

// by default its going to call a compose() method and then pass through a view object
// now we are using a dedicated composer class
// which can be advantageous when you need a lil bit of breathing room to prep and compose a specific view
// or maybe the view needs a bunch of objects. once again, its really easy to have a dedicated class to compose each of thesee
// and further you can define any dependencies that you'll need within the constructor
// in this case we are using an eloquent model directly, but in the future you'll learn about repositories
// think of repositories as collection stores. the nice thing about them is that we can take complex queries
// and isolate them to methods with readable names
// what if you needed to include something? or join something manually? what if there was a specific condition?
//

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

// get my recipes collection and then get me the ones that match this readable name
// and then you take the specific eloquent call and you wrap it within a method name
// if you take this route, you have to define it up top in the construct
// when you pass through the RecipesRepository, laravel is so awesome it will build that up automatically for you
// you define the dependency you need and then laravel will do it's best to build up, instantiate and pass that object to you 