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

        $recipe = new Recipe($request->all());

        Auth::user()->recipes()->save($recipe);

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
