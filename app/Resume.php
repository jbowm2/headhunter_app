<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = 'resumes';

    public function tags()
    {
        return $this->belongsToMany('App/Tag');
    }
}
