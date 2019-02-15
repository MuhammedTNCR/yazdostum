<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;
class MyStoriesController extends Controller
{
    //
    public function __construct()
	{
		# code...
		$this->middleware('auth');
	}

	public function index()
    {
    	# code...
    	$stories = Story::where('owner_id',auth()->id())->get();
    	return view('mystories.index',compact('stories'));
    }
}
