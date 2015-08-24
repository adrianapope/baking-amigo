<?php namespace App\Http\Controllers;

use App\Recipe;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CommentsController extends Controller {

	public function store(Recipe $recipe, Request $request)
	{
		// create the comment
		$comment = Comment::create([
			'body' => $request['body'],
		]);

		return dd($comment);
	}


}
