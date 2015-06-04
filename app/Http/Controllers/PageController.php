<?php namespace App\Http\Controllers;

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
		$recipes = [
			'Vegan Chocolate Cake', 'Raw Blueberry Cheesecake', 'Vegan Chocolate Chip Cookies'
		];

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