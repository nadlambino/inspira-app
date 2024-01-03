<?php

declare(strict_types=1);

namespace App\Controllers;

use Inspira\View\View;

class HomeController
{
	public function index(): View
	{
		return view('pages/home');
	}
}
