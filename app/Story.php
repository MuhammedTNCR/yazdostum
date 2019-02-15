<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Algolia\ScoutExtended\Facades\Algolia;

class Story extends Model
{
	//use Searchable;
    //
    protected $fillable = ['title','story','owner_id','serie_id','image','owner_name'];
    //protected $guarded = [];

    //$searchKey = Algolia::searchKey(Story::class);
    public function serie()
    {
    	# code...
    	return $this->belongsTo(Serie::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
    
    
}
