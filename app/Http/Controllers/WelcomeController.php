<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Contracts\Config\Repository;


class WelcomeController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest');
	}
}


