<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    protected $fillable = [
        'name',
        'service',
        'email',
        'phone'
    ];
}
