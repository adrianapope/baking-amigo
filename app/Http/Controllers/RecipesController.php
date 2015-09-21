<?php namespace App\Http\Controllers;

use App\Comment;
use App\Recipe;
use App\Review;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\RecipeRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class RecipesController extends Controller

{
	/**
	* Create a new recipes controller instance.
	*
	*/
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



	/**
	* Show all recipes.
	*
	*/
	public function index()
    {

		$recipes = Recipe::latest('published_at')->published()->get();

		return view('recipes.index', compact('recipes'));
	}



	/**
	* Show a single recipe.
	*
    * @param Recipe $recipe
	* @return Response
     */
	public function show(Recipe $recipe)
	{

		$comments = Comment::where('recipe_id', '=', $recipe->id)
							->where('review_id', '=', null)
							->get();

		$reviews = Review::where('recipe_id', '=', $recipe->id)->get();

		return view('recipes.show', compact('recipe', 'comments', 'reviews'));

	}



	/**
	* Returns the view for the create form.
	*
	*/
	public function create()
	{

		$tags = Tag::lists('name', 'id');

        return view('recipes.create', compact('tags'));
	}



	/**
	* Save a new recipe to the database.
	*
	* @param RecipeRequest $request
	* @param Response
	*/
	public function store(RecipeRequest $request)
	{

		$this->createRecipe($request);

		flash()->success('Sweet!', 'Your recipe has been successfully created.');

        return redirect('recipes');
    }

	/**
	* Apply a photo to the referenced recipe.
	*
	* @param integer $id
	* @param Request $request
	*/
	public function addPhoto($id, Request $request)
	{
		// validate the request object
		// and compare this against the photo
		// and only allow these mime types
		$this->validate($request, [
			'photo' => 'required|mimes:jpg,jpeg,png,bmp'
		]);

		// grab the uploaded file instance
		$file = ($request->file('photo'));

		// set up a defualt name
		$name = time() . $file->getClientOriginalName();

		// move the file to new location, pass in variable for name
		$file->move('recipes/photos', $name);

		// find the current recipe
		$recipe = Recipe::where('id', '=', $id)->first();

		// link current recipe to photo
		// and create a new photo (where the directory path is this)
		$recipe->photos()->create(['path' => "/recipes/photos/{$name}"]);
	}




	/**
	* Returns the view for edit form. Retrieves information (original content) to edit existing recipe.
	*
     * @param Recipe $recipe
     * @return Response
	*/
	public function edit(Recipe $recipe)
	{
		$tags = Tag::lists('name', 'id');

		return view('recipes.edit', compact('recipe', 'tags'));

	}


    /**
     *  Update a recipe. Processes the input (post request)
     *
     * @param Recipe $recipe
     * @param RecipeRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector*
     */
	public function update(Recipe $recipe, RecipeRequest $request)
	{
		$recipe->update($request->all());

		$this->syncTags($recipe, $request->input('tag_list'));

		flash()->success('Good job!', 'Your recipe has been successfully edited.');

		return redirect('recipes');
	}


	/**
	* Sync up the list of tags in the databse.
	*
	*/
	private function syncTags(Recipe $recipe, array $tags = null)
	{
		$recipe->tags()->sync((array) $tags);
	}

	/**
	* Create and persist a new recipe.
	*
	* @param  RecipeRequest $request
	* @return mixed
	*/
	private function createRecipe(RecipeRequest $request)
	{
		$recipe = Auth::user()->recipes()->create($request->all());

		$this->syncTags($recipe, (array) $request->input('tag_list'));

		return $recipe;
	}

	/**
	* Destroys a recipe record in the Recipes database.
	*
	* @param  Recipe $recipe
	* @return mixed
	*/
	public function destroy(Recipe $recipe)
	{

		// delete the recipe record
		$recipe->delete();

		flash()->success('Heads up', 'Your recipe has been successfully deleted.');

		// return a view
		return redirect('recipes');

	}
}
