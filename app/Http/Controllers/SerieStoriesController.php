<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Story;

class SerieStoriesController extends Controller
{
    //
    public function store(Serie $serie)
    {
    	# code...
    	$attributes = request()->validate(['title'=>'required','story'=>'required']);
        $attributes['owner_id'] = auth()->id();
    	$serie->addStory($attributes);
        /*Story::create([
         'serie_id' => $serie->id,
         'title' => request('title'),
         'story' => request('story');
        ]);*/

        return back(); 

    }
}
