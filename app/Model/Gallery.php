<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'album_id', 'title', 'image'
    ];

    public function hasImage(){
        $val = $this->image;
        if(isset($val)){
            if(file_exists($val)){
                return true;
            }return false;
        }return false;
    }

    public function album(){
        return $this->belongsTo(Album::class);
    }
}
