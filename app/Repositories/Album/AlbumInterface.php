<?php

namespace App\Repositories\Album;


interface AlbumInterface
{
    public function allAlbums();

    public function activeAlbums();

    public function storeAlbum($request);

    public function findBySlug($slug);

    public function findById($id);

    public function getImages($album);

    public function updateAlbum($request);
}
