<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\FooRepository;
use Illuminate\Http\Request;

class FooController extends Controller {

// REPOSITORIES
/*	private $repository;

	public function __construct(FooRepository $repository)
	{
		$this->repository = $repository
	}


// it's a bad practice to new up these types of objects so you wouldn't want to do this
// it makes it more difficult to test this code
// it makes it more difficult to review what dependencies this class has and requires
// be careful with the new keyword unless you are dealing with entitiess or value objects
// two ways around this is constructor injection and the other is method injection
// to begin within our constructor im going to request an instance of the FooRepository class
// and we did reference the full path in the namespace App\Repositories\FooRepository
// so then we can say 		return $this->$repository->get(); and we should get the same exact thing in our browser
// the cool thing is you know exactly what is happening here. laravel is looking into it's service container to give you
// what you require. and in this case, we didn't bind anything, but it said they want FooRespoitory and it looks like im able to instantiate that on my own
// so i will do that with the user and pass it in here
// also you'll find that sometimes you'll have a controller method where you need some sort of dependency but really really that method is the only place where you need the depenecy
// so in those types of situation it is really a shame that you would have to inject it to the controller when one method would make use of it.
// we have a solution. you can use method injection. it works in the exact same way. you type hint what you need and then when laravel calls this, it woroks
// so if you are asking yourself whether you need controller or method injection the basic rule is this. if you only need one time, just use method injection. 
// but if you have 2-3 methods that need foo repository, then it makes more sense to inject it through the constructor
// this doesn't mean that every single method in your entire application can make use of method injection...it's just specific components that offer this.
// in this case a controller method.  laravel calls this method behind the scenese so it can make use of that. same is true for command handlers or event listeners.



//
	public function foo()
	{
		//$repository = new \App\Repositories\FooRepository();

		return $this->$repository->get();
	}
*/

// METHOD INJECTION


}
