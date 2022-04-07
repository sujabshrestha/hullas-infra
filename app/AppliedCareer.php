<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedCareer extends Model
{
    //

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cv'
    ];
}
