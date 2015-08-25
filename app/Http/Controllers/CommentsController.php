<?php namespace App\Http\Controllers;

use App\Recipe;
use App\Comment;
use App\Review;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CommentsController extends Controller {

	public function store($id, Request $request)
	{
		//get recipe
		$recipe = Recipe::whereId($id)->first();


		// create the comment
		$comment = Comment::create([
			'body' 		=> $request['body'],
			'recipe_id' => $recipe->id,
			'user_id' 	=> Auth::user()->id
		]);


		// check if review exists

		if( isset($request['rating']) ) {

			// create the new review
			$review = Review::create([
				'rating' 		=> $request['rating'],
				'user_id' 		=> Auth::user()->id,
				'recipe_id' 	=> $recipe->id,
				'comment_id' 	=> $comment->id
			]);

			// attach the review to the comment
			$comment->review_id = $review->id;

			// save properly to include review_id
			$comment->save();
		}

		//return view
		return redirect("/recipes/$recipe->id");
	}


}
