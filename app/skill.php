<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    public function jobs()
    {
        return $this->belongsTo('App\Job');
    }
}
