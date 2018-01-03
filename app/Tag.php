<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function BroadQuestion()
    {
    	return $this->belongsToMany('App\BroadQuestion','question_tag','tag_id','question_id');
    }
}
