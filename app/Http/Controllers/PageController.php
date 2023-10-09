<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Contact;
use App\Service;
use App\Settings;
use SEO;
use SEOMeta;
use App\SeoPage;
use App\TitlePage;
use App\SliderHome;
use App\SliderProduct;
use App\Project;
use App\Client;
use App\Mission;
use App\Vision;
class PageController extends Controller
{
    //

    public function __construct()
    {
        app()->singleton('contact', function(){
            $settings = Settings::where('id','1')->get();
            return $settings[0];
        });

    }

    public function setSeo($page_data)
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);
       
        if($page_data->image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL').'/assets/seo/'.$page_data->image); 
    }

    public function home()
    {
        $page_data =SeoPage::where('id',1)->get();
        $this->setSeo($page_data[0]);
        $sliders =SliderHome::all();
        $about =About::where('id',1)->get();
        $services =Service::where('id',1)->get();
        $title =TitlePage::where('id',1)->get();
        $product=SliderProduct::all();
        $projects=Project::all();
        $clients=Client::all();
        $contact =Contact::where('id',1)->get();
        $missions =Mission::where('id',1)->get();
        $visions =Vision::where('id',1)->get();

       
        return view('home',compact('page_data','sliders','about','services','title','product','projects','clients','contact','missions','visions'));
    }


}
