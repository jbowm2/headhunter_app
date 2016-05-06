<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = ['name'];
    
    public function resumes()
    {
        return $this->belongsToMany('App\Resume')->withTimestamps();
    }

}
