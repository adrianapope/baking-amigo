<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfileFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'location'				=> 'required',
			'bio'					=> 'required',
			'twitter_username'		=> 'required',
			'instagram_username'	=> 'required'
		];
	}

}
