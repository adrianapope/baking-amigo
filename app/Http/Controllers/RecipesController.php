<?php namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Http\Requests\RecipeRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RecipesController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }



	/**
	* Show all recipes.
	*
	*/
	public function index()
    {

		$recipes = Recipe::latest('published_at')->published()->get();

		return view('recipes.index', compact('recipes'));
	}



	/**
	* Show a single recipe.
	*
    * @param Recipe $recipe
	* @return Response
     */
	public function show(Recipe $recipe)
	{
		return view('recipes.show', compact('recipe'));
	}

	/**
	* Show the page to create a new recipe.
	*
	*/
	public function create()
	{
		return view('recipes.create');
	}



	/**
	* Save a new recipe.
	*
	* @param RecipeRequest $request
	* @param Response
	*/
	public function store(RecipeRequest $request)
	{

        Auth::user()->recipes()->create($request->all());

	    session()->flash('flash_message', 'Your recipe has been created!');

        session()->flash('flash_message_important', true);


        //#2 way of doing this
        // use this with the package laracasts/flash
        // and add the service provider and facade under config file->app
        // also use this along with adding @include('flash::message') to the app.blade.php file
/*        flash()->success('Your recipe has been successfully created!');*/
        /*//same as using the facade approach below
        \Flash::success();
        \Flash::error();
        \Flash::info();*/

        // #3 way of doing this
        // use this along with a modal in the app.blade.php file
        // this is an overlay message. there is a message plus a heading.
        // you have to fetch the modal
        // on the app.blade.php file, we are using a little bootstrap. reference the script and activiate the plug in so to speak
        /*   flash()->overlay('Thanks for contributing! Your recipe has been created.', 'Success!');
        */

        return redirect('recipes');

    }



	/**
	* Shows a page to edit an existing recipe
	*
     * @param Recipe $recipe
     * @return Response
	*/
	public function edit(Recipe $recipe)
	{
		return view('recipes.edit', compact('recipe'));
	}


    /**
     *  Update a recipe.
     *
     * @param Recipe $recipe
     * @param RecipeRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector*
     */
	public function update(Recipe $recipe, RecipeRequest $request)
	{
		$recipe->update($request->all());

		return redirect('recipes');
	}
}
