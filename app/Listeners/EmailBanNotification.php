<?php namespace App\Listeners;

use App\Events\UserWasBanned;
use Illuminate\Queue\InteractsWithQueue;


class EmailBanNotification {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserWasBanned  $event
	 * @return void
	 */
	public function handle(UserWasBanned $event)
	{
		var_dump('Notify ' . $event->user->name . ' that they have banned from the site.');
	}

}
