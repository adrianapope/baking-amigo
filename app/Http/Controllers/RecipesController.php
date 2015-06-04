<?php namespace App\Http\Controllers;

use App\Recipe;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Recipe;
use Carbon\Carbon;
use Request;

class RecipesController extends Controller {

	public function index()
	{
		$recipes = Recipe::latest('published_at')->get();

		return view('recipes.index', compact('recipes'));
	}
	
	public function show($id)
	{
		$recipe = Recipe::findOrFail($id);

		return view('recipes.show', compact('recipe'));
	}

	public function create()
	{
		return 'test';
		return view('recipes.create');
	}

	public function store()
	{
		$input = Request::all();
		$input['published_at'] = Carbon::now();
		
		Article::create($input);

		return redirect('articles');
	}
		//$recipes = Recipe::with('ingredients')->get();
		//return view('recipes.index', compact('recipes'));
}
