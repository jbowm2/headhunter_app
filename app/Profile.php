<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'gender',
        'birthday',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
