<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Album\StoreAlbumImageRequest;
use App\Http\Requests\Album\StoreAlbumRequest;
use App\Model\Gallery;
use App\Repositories\Album\AlbumInterface;
use Illuminate\Http\Request;
use App\Http\Requests\AdminForm\UpdateFormRequest;


class AlbumController extends Controller
{
    protected $album;
    public function __construct(AlbumInterface $album)
    {
        $this->album = $album;
    }

    public function index(){
        $albums = $this->album->allAlbums();
        return view('admin.album.index', compact('albums'));
    }

    public function add(){
        return view('admin.album.create');
    }

    public function store(StoreAlbumRequest $request){
        try{
            $this->album->storeAlbum($request);
            return redirect()->back()->with('success','New Album Created');
        }catch (\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function edit($slug){
        $editAlbum = $this->album->findBySlug($slug);
       
        if($editAlbum){
            return view('admin.album.edit',compact('editAlbum'));
        }else{
            return redirect()->back()->with('error','Error! Form not found.');
        }
    }

    // public function update(Form $form, UpdateFormRequest $request){
    public function update( UpdateFormRequest $request){
        try{
            $editAlbum = $this->album->updateAlbum($request);
            if($editAlbum === true) {
                return redirect()->back()->with('success', 'Album Updated Successfully');
            }else{
                return redirect()->back()->with('error','Album Not Found');
            }

            // $editForm = $this->form->findById($request->form_id);
            // if($editForm) {
            //     $editForm = $this->form->updateForm($editForm, $request->all());
            //     return redirect()->route('admin.form.edit',[$editForm->slug])->with('success', 'Form Updated Successfully');
            // }else{
            //     return redirect()->back()->with('error','Form Not Found');
            // }
        }catch (\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function delete($id){
        try {
            $form = $this->form->findById($id);
            if ($form) {
                $submissions = $this->form->formSubmissions($form);
                if ($submissions->count() > 0) {
                    return redirect()->back()->with('error', 'Form has submission from users. Remove those submitted forms first.');
                }
                $this->form->deleteForm($form);
                return redirect()->route('admin.albums')->with('success', 'Form deleted Successfully');
            } else {
                return redirect()->back()->with('error', 'Form Not Found');
            }
        }catch (\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function gallery($id){
        $album = $this->album->findById($id);
        if(!$album){
            return redirect()->route('admin.albums')->with('error','Failed to load');
        }
        return view('admin.album.gallery',compact('album'));
    }

    public function getImages($id){
        $album = $this->album->findById($id);
        $images = $this->album->getImages($album);
        return $images;
    }

    public function uploadImage(StoreAlbumImageRequest $request, $id){
        try {
            $album = $this->album->findById($id);
            $image = $request->file('album_image');
            $this->album->storeAlbumImage($album, $image);
        }catch (\Exception $e){
            return response()->json(['errors'=>[$e->getMessage()]]);
        }
    }

    public function deleteImage($id){
        $gallery = Gallery::find($id);
        imageDelete($gallery);
        $gallery->delete();
    }

}
