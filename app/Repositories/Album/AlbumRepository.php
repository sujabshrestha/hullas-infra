<?php

namespace App\Repositories\Album;


use App\Model\Album;
use App\Model\Gallery;
use Illuminate\Support\Facades\File;

class AlbumRepository implements AlbumInterface
{

    public function allAlbums(){
        return Album::all();
    }

    public function activeAlbums(){
        return $this->allAlbums()
            ->where('status','Active')
            ->sortByDesc('created_at');
    }

    public function storeAlbum($request)
    {
        if ($request->hasFile('feature_image')) {
            $feature_image = imageupload('upload/album/', $request->file('feature_image'));
        }
        $album = Album::create([
            'title' => $request->title,
            'status' => $request->status,
            'feature_image' => $feature_image ?? ""
        ]);

    }

    public function findBySlug($slug){
        return Album::where('slug',$slug)->first();
    }

    public function findById($id){
        return Album::where('id',$id)->first();
    }

    public function getImages($album){
        return $album->galleries;
    }

    public function storeAlbumImage($album, $image){
        $db_path = imageupload('upload/gallery/album_'.$album->id.'/',$image);
        $gallery = Gallery::create([
            'album_id' => $album->id,
            'image' => $db_path,
        ]);
    }

    public function updateAlbum($request){
        $album = Album::where('id',$request->album_id)->first();
        if ($request->hasFile('feature_image')) {
            if(File::exists(public_path($album->feature_image))){
                File::delete(public_path($album->feature_image));
            }
            $album->feature_image = imageupload('upload/album/', $request->file('feature_image'));
            $album->update();
        }
        return true;


    }

}
