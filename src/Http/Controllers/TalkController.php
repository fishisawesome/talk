<?php namespace Nahid\Talk\Http\Controllers;

use Nahid\Talk\Facades\Talk;
use \Auth;

class TalkController extends BaseController {

	public function index()
	{
		if (Auth::guest())
		{
			return redirect('login');
		}
		

		Talk::setAuthUserId(auth()->user()->id);
	}

}