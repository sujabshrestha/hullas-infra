<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Album;
use App\Model\Gallery;
use App\Model\GobalPostMeta;
use App\Repositories\FrontCms\CmsInterface;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    protected $cms;
    public function __construct(CmsInterface $cms)
    {
        $this->cms = $cms;
    }

    private function post($slug){
        $postType = $this->cms->getGlobalPostTypeBySlug($slug);
        $posts = $this->cms->getGlobalPostByPostType($postType);
        return $posts;
    }

    public  function gallery(){
        $albums = Album::all();
        return view('frontEnd.cms.gallery.all', compact('albums'));
    }

    public function singleGallery($id){
        $album = Album::find($id);
        $images = Gallery::where('album_id',$album->id)->get();
        return view('frontEnd.cms.gallery.single',compact('album','images'));
    }

    public  function careers(){
        $careers = $this->post('careers');
        return view('frontEnd.cms.careers.all', compact('careers'));
    }

    public function singleCareer($id){
        $careers = $this->post('careers');
        $career = $careers->where('id',$id)->first();
        if($career) {
            return view('frontEnd.cms.careers.single',compact('career'));
        }else{
            abort(404);
        }
    }

    public function downloads(){
        $downloads = $this->post('downloads');
        foreach ($downloads as $download){
            $download->file = $this->cms->getGlobalPostMetaByKey($download, 'file') ?? null;
        }
        return view('frontEnd.cms.downloads.all',compact('downloads'));
    }

    public function notices(){
        $newsNotices = $this->post('news-notices');
        $recentReports = $this->post('reports')->take(5);
        return view('frontEnd.cms.newsNotices.all',compact('newsNotices','recentReports'));
    }

    public function singleNotice($id){
        $newsNotices = $this->post('news-notices');
        $notice = $newsNotices->where('id',$id)->first();
        if($notice) {
            $recentNotices = $newsNotices->where('id','!=',$notice->id)->take(5);
            return view('frontEnd.cms.newsNotices.single',compact('notice','recentNotices'));
        }else{
            abort(404);
        }
    }

    public function reports(){
        $reports = $this->post('reports');
        $recentNewsNotices = $this->post('news-notices')->take(5);
        return view('frontEnd.cms.reports.all', compact('reports','recentNewsNotices'));
    }

    public function singleReport($id){
        $reports = $this->post('reports');
        $report = $reports->where('id',$id)->first();
        if($report) {
            $report->file = $this->cms->getGlobalPostMetaByKey($report, 'file');
            $recentReports = $reports->where('id','!=',$report->id)->take(5);
            return view('frontEnd.cms.reports.single',compact('report','recentReports'));
        }else{
            abort(404);
        }
    }

    public function services(){
        $services = $this->post('service');
        return view('frontEnd.cms.services.all',compact('services'));
    }

    public function singleService($id){
        $services = $this->post('service');
        $service = $services->where('id',$id)->first();
        if($service) {
            return view('frontEnd.cms.services.single', compact('service'));
        }else{
            abort(404);
        }
    }

    public function userExperience(){
        $userExperiences = $this->post('user-experience');
        return view('frontEnd.cms.userexperience.all',compact('userExperiences'));
    }

    public function singleUserExperience($id){
        $userExperiences = $this->post('user-experience');
        $experience = $userExperiences->where('id',$id)->first();
        if($experience) {
            return view('frontEnd.cms.userexperience.single', compact('experience'));
        }else{
            abort(404);
        }
    }

    public function singleSpecialPost($id){
        $posts = $this->post('special-post');
        $post = $posts->where('id',$id)->first();
        if($post) {
            return view('frontEnd.cms.specialpost.single', compact('post'));
        }else{
            abort(404);
        }
    }

    public function faq(){
        $faqs = $this->post('faq');
        return view('frontEnd.cms.faq.all', compact('faqs'));
    }
}
