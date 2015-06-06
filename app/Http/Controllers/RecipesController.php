<?php namespace App\Http\Controllers;

use App\Recipe;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class RecipesController extends Controller {

	public function index()
	{
		$recipes = Recipe::latest('published_at')->published()->get();

		return view('recipes.index', compact('recipes'));
	}
	
	public function show($id)
	{
		$recipe = Recipe::findOrFail($id);

		//$recipe->published_at;

		return view('recipes.show', compact('recipe'));
	}

	public function create()
	{
		return view('recipes.create');
	}

	public function store()
	{
		Recipe::create(Request::all());

		return redirect('recipes');
	}
		//$recipes = Recipe::with('ingredients')->get();
		//return view('recipes.index', compact('recipes'));
}
