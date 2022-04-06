<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use Sluggable, SoftDeletes;

    protected $fillable = [
        'id', 'title', 'slug', 'feature_image', 'status'
    ];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function hasImage(){
        $val = $this->feature_image;
        if(isset($val)){
            if(file_exists($val)){
                return true;
            }return false;
        }return false;
    }

    public function galleries(){
        return $this->hasMany(Gallery::class);
    }
}
