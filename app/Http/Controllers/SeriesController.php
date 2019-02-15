<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
class SeriesController extends Controller
{
	public function __construct()
	{
		# code...
		$this->middleware('auth')->except(['show','index']);
	}
	public function index()
    {
    	# code...
    	$series = Serie::all();
    	return view('series.index',compact('series'));
    
        //$series = Serie::all();
    	//return view('series.index',compact('series'));

    }

    public function create()
    {
    	# code...
    	return view('series.create');
    }

    public function show(Serie $serie)
    {
    	# code...
    	//$story = Story::findOrFail($id);
    	return view('series.show',compact('serie'));
    }

    public function edit(Serie $serie)
    {
    	# code...
    	// $story = Story::findOrFail($id);
    	//$this->authorize('update',$serie);

    	return view('series.edit',compact('serie'));
    }

    public function update(Serie $serie)
    {
    	$this->authorize('update',$serie);

        $serie->update(request(['title','description']));
        //Burda serinin sayfasına gelmesini istiyorum.
        return redirect()->action('SeriesController@show',[$serie]);
        


    }

    public function destroy(Serie $serie)
    {
    	# code...
    	//Story::findOrFail($id)->delete();
    	$this->authorize('delete',$serie);

        $serie->delete();       
        return redirect('/series');
    }
    
    public function store()
    {
    	# code...
    	//$story = new Story();

    	//$story->title = request('title');
    	//$story->story = request('story');

    	//$story->save();
    	//$this->authorize('restore',$serie);

    	$attributes = request()->validate([
          'title'=>'required',
          'description'=>'required'  
    	]);
        
        $attributes['owner_id'] = auth()->id();
    	
    	Serie::create($attributes);

    	return redirect('/series');
         

    }     


}
