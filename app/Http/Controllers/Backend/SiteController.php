<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\SiteSetting;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        return view ('admin.site');

    }

    public function update(Request $request)
    {
        $inputs = $request->all();
        foreach ($inputs as $inputKey => $inputValue) {
            if ( $inputKey == 'logo') {
                $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

                if($sitesetting)
                {
                    if(file_exists($sitesetting->value)){
                        unlink($sitesetting->value);
                    }
                }

                $inputValue = $this->uploadImage( $request['logo'], 'upload/site/');
            }
            if ( $inputKey == 'favicon') {
                $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

                if($sitesetting)
                {
                    if(file_exists($sitesetting->value)){
                        unlink($sitesetting->value);
                    }
                }

                $inputValue = $this->uploadImage( $request['favicon'], 'upload/site/');
            }
            if ( $inputKey == 'aboutus_image') {
                $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

                if($sitesetting)
                {
                    if(file_exists($sitesetting->value)){
                        unlink($sitesetting->value);
                    }
                }

                $inputValue = $this->uploadImage( $request['aboutus_image'], 'upload/site/');
            }
            if ( $inputKey == 'memberofecan') {
                $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

                if($sitesetting)
                {
                    if(file_exists($sitesetting->value)){
                        unlink($sitesetting->value);
                    }
                }

                $inputValue = $this->uploadImage( $request['memberofecan'], 'upload/site/');
            }
            if ( $inputKey == 'recognisedagentof') {
                $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

                if($sitesetting)
                {
                    if(file_exists($sitesetting->value)){
                        unlink($sitesetting->value);
                    }
                }

                $inputValue = $this->uploadImage( $request['recognisedagentof'], 'upload/site/');
            }
            if ( $inputKey == 'trainedagentof') {
                $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

                if($sitesetting)
                {
                    if(file_exists($sitesetting->value)){
                        unlink($sitesetting->value);
                    }
                }

                $inputValue = $this->uploadImage( $request['trainedagentof'], 'upload/site/');
            }
            if ( $inputKey == 'footer_image') {
                $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

                if($sitesetting)
                {
                    if(file_exists($sitesetting->value)){
                        unlink($sitesetting->value);
                    }
                }

                $inputValue = $this->uploadImage( $request['footer_image'], 'upload/site/');
            }
            // if ( $inputKey == 'chairman_photo') {
            //     $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

            //     if($sitesetting)
            //     {
            //         if(file_exists($sitesetting->value)){
            //             unlink($sitesetting->value);
            //         }
            //     }

            //     $inputValue = $this->uploadImage( $request['chairman_photo'], 'upload/site/');
            // }
            // if ( $inputKey == 'about_banner') {
            //     $sitesetting = SiteSetting::where('key', '=', $inputKey)->first();

            //     if($sitesetting)
            //     {
            //         if(file_exists($sitesetting->value)){
            //             unlink($sitesetting->value);
            //         }
            //     }

            //     $inputValue = $this->uploadImage( $request['about_banner'], 'upload/site/');
            // }


            SiteSetting::updateOrCreate( [ 'key' => $inputKey ], [ 'value' => $inputValue ] );

        }
        return redirect()->back()->with('success', 'Successfully Updated.');

    }


    public function uploadImage($file, $path){
        if ($file) {

            $uploadedfile =  time() . '.' . $file->getClientOriginalName();

            $destinationPath = public_path($path);
            $file->move($destinationPath, $uploadedfile);
            return $path.$uploadedfile;

        }
        return null;
    }
}
