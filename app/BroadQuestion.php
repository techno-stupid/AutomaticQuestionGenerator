<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BroadQuestion extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Tag','question_tag','question_id','tag_id');
    }
}
