<?php

namespace Iapac\Panel\Http\Controllers;


class HomeController
{
	public function __construct() {
	}

	public function index() {
		$title = 'Join iApac Panel and get rewards for your opinions.';
		return \Iapac\Panel\App\view('home', compact('title'));
	}

}