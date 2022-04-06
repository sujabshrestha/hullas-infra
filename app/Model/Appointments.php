<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $fillable = [
        'fullname',
        'service_id',
        'passportnumber',
        'address',
        'nationality',
        'phoneNumber',
        'email',
        'remarks',
        'file'
    ];
}
