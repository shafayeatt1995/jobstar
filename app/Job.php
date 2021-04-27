<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function jobtype()
    {
        return $this->belongsTo('App\Jobtype');
    }

    public function career()
    {
        return $this->belongsTo('App\Career');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->hasMany('App\tag');
    }

    public function skills()
    {
        return $this->hasMany('App\skill');
    }
}
