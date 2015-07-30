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
			$user = User::with('profile')->whereId($id)->firstOrFail();
		}
		catch(ModelNotFoundException $e)
		{
			return redirect('/');
		}
		return view('profiles.show', compact('user'));
	}

	public function edit($id)
	{
		$user = User::whereId($id)->firstOrFail();

		return view('profiles.edit', compact('user'));
	}

	public function update($id)
	{
		$user = User::whereId($id)->firstOrFail();

		$input = Input::only('location', 'bio', 'twitter_username', 'instagram_username');
	}
}


