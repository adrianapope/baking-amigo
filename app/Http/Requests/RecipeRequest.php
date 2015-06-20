<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecipeRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 * Does the user have permission to perform this kind of request/action?
	 * John cannot edit a comment that was added by Jane.
	 * set to true, anyone can make this request currently. 
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 * we can add our terms for the request. 
	 * we can reference those names here. 
	 * what is required and what is not required.
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|min:3',
			'description' => 'required',
			'instructions' => 'required',
			'published_at' => 'required|date',
			'prep_time' => 'integer',
/*			'cook_time' => 'required|integer',
*/			'cook_time_type' => 'required',
			'ready_time' => 'integer',
		];
	}

}
