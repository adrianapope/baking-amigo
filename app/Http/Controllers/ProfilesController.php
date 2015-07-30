<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProfileFormRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

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
			return abort(404);
		}
		return view('profiles.show', compact('user'));
	}

	public function edit($id)
	{
		try
		{
			$user = User::whereId($id)->firstOrFail();
		} catch(ModelNotFoundException $e) {
			return abort(404);
		}

		if( Auth::user()->id == $user->id ) {
			return view('profiles.edit', compact('user'));
		}

		return abort(404);

	}

	public function update($id, ProfileFormRequest $request)
	{

		try
		{
			$user = User::whereId($id)->firstOrFail();
		} catch(ModelNotFoundException $e) {
			return abort(404);
		}

		if( Auth::user()->id == $user->id ) {

			$profile = $user->profile()->first();
			$profile->location = $request['location'];
			$profile->bio = $request['bio'];
			$profile->twitter_username = $request['twitter_username'];
			$profile->instagram_username = $request['instagram_username'];
			$profile->save();
			return redirect("/users/$user->id/edit");
		}

		return abort(404);

	}
}


