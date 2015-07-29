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
	 * @param  $id
	 * @return Response
	 */
	public function show($id)
	{
		try
		{
			$user = User::whereId($id)->firstOrFail();
		}
		catch(ModelNotFoundException $e)
		{
			return redirect('/');
		}
		return view('profiles.show', compact('user'));
	}

}
