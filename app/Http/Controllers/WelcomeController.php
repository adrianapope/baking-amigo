<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Contracts\Config\Repository;

class WelcomeController extends Controller
{

	protected $config;

	/*public function __construct()
	{
		$this->middleware('guest');
	}*/

	public function __construct(Repository $config)
	{

		$this->config = $config;

	}

	public function test()
	{
		// constructor injection
		return $this->config->get('database.default');
		// method injection
		return $config->get('database.defualt');  // laravel five supports method injection on controllers. just pass through Repository $config into the public function test() method
		// facade
		// config helper function
	}
}

// how to reference this stuff in your controller
// we just want to fetch our default database type  (just as an example)
// with the first two, you have the option of referencing the concrete implementation
// or the contract/interface itself
// in the construct, we will typehint the config/Repository
// and import this up top
// you can reference the concrete implemnetation (Illuminate\Config\Repository) or the abstract/interface/contract (Illuminate\Contracts\Config\Repository) and that's what we'll do in thi s case
// the __construct that deals with $config takes care of the constructor injection option
// we would just say return this config get database.default and in chrome we get mysql
// so that is constructor injection using an interface
// how did laravel know that for this interface it should use some specific implementation? next episode.
