<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecipeRequest extends Request {

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
