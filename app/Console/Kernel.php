<?php namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'App\Console\Commands\Inspire',
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	// in order to email the output, we have to have saved the output.
	// command method just calls $this->exec behind the scenes

	{
		$schedule->command('inspire')
				 ->hourly();
		/*$schedule->command('laracasts:sample')->at('10:30');

		$schedule->command('laracasts:clear-history')->monthly()->sendOutputTo('path/to/file')->emailOutputTo('');
		$schedule->command('laracasts:daily-report')->dailyAt('23:55');*/
	}

}
