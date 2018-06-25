<?php

namespace Iapac\Panel\Http\Controllers;

class RewardsController {
	public function __construct()
	{
	}

	public function index() {
		$title = 'Rewards, Coupons, Incentives';

		return \Iapac\Panel\App\view('rewards', compact('title'));
	}
}