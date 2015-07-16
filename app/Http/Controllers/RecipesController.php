<?php namespace App\Http\Controllers;

use App\Recipe;
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
        $this->middleware('auth', ['except' => 'index']);
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
		return view('recipes.show', compact('recipe'));
	}



	/**
	* Show the page to create a new recipe.
	*
	*/
	public function create()
	{
		$tags = Tag::lists('name', 'id');  //we fetch our tags and use the method called lists. give me an array of all the values from a column (in this case we'll do 'name')

        return view('recipes.create', compact('tags')); //we'll pass 'tags' through to the view
	}



	/**
	* Save a new recipe.
	*
	* @param RecipeRequest $request
	* @param Response
	*/
	public function store(RecipeRequest $request)
	{
		$this->createRecipe($request);

	    session()->flash('flash_message', 'Your recipe has been created!');

        session()->flash('flash_message_important', true);

        return redirect('recipes');
    }



	/**
	* Shows a page to edit an existing recipe
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
     *  Update a recipe.
     *
     * @param Recipe $recipe
     * @param RecipeRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector*
     */
	public function update(Recipe $recipe, RecipeRequest $request)
	{
		$recipe->update($request->all());

		$this->syncTags($recipe, $request->input('tag_list'));

		return redirect('recipes');
	}


	/**
	* Sync up the list of tags in the databse.
	*
	*/
	private function syncTags(Recipe $recipe, array $tags)
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
		$recipe = Auth::user()->recipe()->create($request->all());

		$this->syncTags($recipe, $request->input('tag_list'));

		return $recipe;
	}
}
