<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'dob',
        'nationality',
        'gender',
        'know_about_rise',
        'education',
        'image',
        'address',
        'time',
        'course',
        'message'
    ];
}
