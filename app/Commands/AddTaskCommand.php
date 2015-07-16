<?php namespace App\Commands;

use Carbon\Carbon;
use App\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class AddTaskCommand extends Command implements SelfHandling {

protected $name = 'app:add-task';

protected $description = 'Add a new dummy task';

public function fire()
{
	Task::create([
		'name' => 'Dummy Task',
		'description' => 'Task added on' . Carbon::now()
	]);
}

}
