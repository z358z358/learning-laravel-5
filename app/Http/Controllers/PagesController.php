<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about()
	{
		$first = 'Fox';
		$last = 'Last';

		return view('pages.about', compact('first', 'last'));
	}

}
