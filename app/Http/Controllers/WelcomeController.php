<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Contracts\Config\Repository;
/*use Config;*/

// how do we use them and further we know that an interface is not a class, so how do we link everything up?
// how do we tell laravel that when we ask for this interface, what i really want is this specific implementation...
// straight out of the box, those binding are already set up!
// how to reference this stuff in your controller
// we just want to fetch our default database type (for no other reason then we will have something in the configuration for us to fetch)
// with the constructor injection and method injection, you have the option of referencing the concrete implementation or the contract/interface itself

// Constructor Injection
// in the construct, we will typehint the config/Repository and import this up top
// you can reference the concrete implemnetation (Illuminate\Config\Repository) or the abstract/interface/contract (Illuminate\Contracts\Config\Repository) and that's what we'll do in thi s case
// the __construct that deals with $config takes care of the constructor injection option
// we would just say return this config get database.default and in chrome we get mysql
// so that is constructor injection using an interface

// Method Injection
// laravel five supports method injection on controllers. just pass through Repository $config into the public function test() method
// you can delete the __construct as well!
// this is a good option when you only want to reference your $config in one single method
// if you'll reference it elsewhere in this class, then yes, you might want to use constructor injection

// Facade
// there is nothing wrong with referencing a facade no matter what you hear around the web
// you can also import the class 'use Config;' up top

// Helper Function
// what jeff recomends you use in your controllers. you always have to ask your self, by using this form of injection, am i really getting any bang for my buck?
// or am i just adding little bits of complexity that add up over time?
// even though we are caling a general function, you still have the full flexibilty to use any driver or implementation that you want.
// this does not link us to any concrete class whatsoever.
// just call config()
// don't need the imported class 'use Config;' since not calling a facade

/* class WelcomeController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest');
	}*/

# CONSTRUCTOR INJECTION (we'll reference the interface/contract/abstract but you can also reference the concrete class if you wanted)
class WelcomeController extends Controller
{
	protected $config;

	public function __construct(Repository $config)
	{
		$this->config = $config;
	}

	public function test()
	{
		return $this->config->get('database.default');
	}
}



# METHOD INJECTION
class WelcomeController extends Controller
{
	public function test(Repository $config)
	{
		return $config->get('database.defualt');
	}
}

# FACADE
class WelcomeController extends Controller
{
	public function test()
	{
		return \Config::get('databse.default');
	}
}

# CONFIG HELPER FUNCTION *best option for our controller*
class WelcomeController extends Controller
{
	public function test()
	{
		return config('database.default');
	}
}


