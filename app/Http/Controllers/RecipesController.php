<?php namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Http\Requests\RecipeRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class RecipesController extends Controller {

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
	*/
	public function show($id)
	{
		$recipe = Recipe::findOrFail($id);

		//$recipe->published_at;

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
		Recipe::create($request->all());

		return redirect('recipes');
	}
		//$recipes = Recipe::with('ingredients')->get();
		//return view('recipes.index', compact('recipes'));

	/**
	* Shows a page to edit an existing recipe
	*
	*/
	public function edit($id)
	{
		$recipe = Recipe::findOrFail($id);

		return view('recipes.edit', compact('recipe'));
	}

	public function update($id, RecipeRequest $request)
	{
		$recipe = Recipe::findOrFail($id);

		$recipe->update($request->all());

		return redirect('recipes');
	}
}
