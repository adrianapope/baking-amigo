<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProfilesController extends Controller {

	/**
	 * Display the specified resource.
	 *
	 * @param  $name
	 * @return Response
	 */
	public function show($name)
	{
		try
		{
			$user = User::whereName($name)->firstOrFail();
			dd($user->toArray());
		}
		catch(ModelNotFoundException $e)
		{
			return redirect('/');
		}
		return View::make('profiles.show');
	}

}
