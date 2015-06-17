<?php namespace App\Http\Controllers;

use App\Recipe;
use App\Http\Requests;
use App\Http\Requests\CreateRecipeRequest;
use Illuminate\HttpResponse;
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
	* @param CreateRecipeRequest $request
	* @param Response
	*/
	public function store(CreateRecipeRequest $request)
	{
		Recipe::create($request->all());

		return redirect('recipes');
	}
		//$recipes = Recipe::with('ingredients')->get();
		//return view('recipes.index', compact('recipes'));
}
