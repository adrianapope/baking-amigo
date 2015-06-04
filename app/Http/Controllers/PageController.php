<?php namespace App\Http\Controllers;

use App\Recipe;

class PageController extends Controller {

	
	/**
 	* Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.home');
	}

	public function about()
	{
		$recipes = Recipe::all();

		return view('pages.about', compact('recipes'));
	}

	public function terms()
	{
		return view('pages.terms');
	}

	public function privacy()
	{
		return view('pages.privacy');
	}
	public function contact()
	{
		return view('pages.contact');
	}
}