<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //
    protected $fillable = ['title','description','owner_id'];
    //protected $guarded = [];


    public function stories()
    {
    	# code...
    	return $this->hasMany(Story::class);
    }

    public function addStory($story)
    {
    	# code...
    	$this->stories()->create($story);
    	/*
    	return Story::create([
         'serie_id' => $this->id,
         'title' => $title,
         'story' => $story
        ])
        */
    }

}
