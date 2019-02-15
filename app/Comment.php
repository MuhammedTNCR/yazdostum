<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Comment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
    	# code...
    	return $this->hasMany(Comment::class,'parent_id');
    }
}
