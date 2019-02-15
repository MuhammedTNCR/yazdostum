<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
class MySeriesController extends Controller
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
    	$series = Serie::where('owner_id',auth()->id())->get();
    	return view('myseries.index',compact('series'));
    }
}
