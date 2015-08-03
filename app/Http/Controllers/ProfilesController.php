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
	 * Display the profile of a user based on id
	 *
	 * @param  $id
	 * @return View
	 */
	public function show($id)
	{
		try
		{
			$user = User::with('profile')->whereId($id)->firstOrFail();
		} catch(ModelNotFoundException $e) {
			return abort(404);
		}

		return view('profiles.show', compact('user'));
	}



	/**
	 * User can edit their own profile.
	 *
	 * @param  $id
	 * @return View
	 */
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
	/**
	 * Saves edits made to a user's profile.
	 *
	 * @param  $id
	 * @return View
	 */
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

			session()->flash('flash_message', 'Awesome! Your profile has been successfully updated.');

			return redirect("/users/$user->id/edit");
		}

		return abort(404);

	}
}


