<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\BannerAndMetaTag;
use App\Models\Contactus;
use App\Models\countSetting;
use App\Models\HomeBanner;
use App\Models\HomeCms;
use App\Models\KeyElement;
use App\Models\MiningCms;
use App\Models\Miningprocess;
use App\Models\NewsEvents;
use App\Models\NewsEventsCms;
use App\Models\StructureCms;
use App\Models\TeamMember;
use App\Models\TermsAndCondition;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home_cms = HomeCms::first();
        $home_banner = HomeBanner::first();
        $news_events_cms = NewsEventsCms::first();
        $news_events = NewsEvents::orderBy('date', 'desc')->active()->latest()->take(3)->get();
        $count_setting = countSetting::orderBy('sort_order')->active()->get();

        return view('frontend::index', compact('home_cms', 'home_banner', 'news_events_cms', 'news_events','count_setting'));
    }


    public function terms()
    {
        $bannerandmeta = BannerAndMetaTag::find(5);
        $terms = TermsAndCondition::first();
        return view('frontend::terms', compact('terms', 'bannerandmeta'));
    }



    public function about()
    {

        $bannerandmeta = BannerAndMetaTag::find(1);
        $about_cms = AboutUs::first();
        $team_member = TeamMember::active()->where('type', 1)->get();//get the team members
        $senior_member = TeamMember::active()->where('type', 2)->get();//get the senior members
        $minior_process = Miningprocess::orderBy('sort_order')->active()->get();
        $minior_cms = MiningCms::first();
        $count_setting = countSetting::orderBy('sort_order')->active()->get();
        return view('frontend::about', compact('bannerandmeta', 'about_cms', 'team_member', 'senior_member', 'minior_process', 'minior_cms','count_setting'));
    }


    public function contact()
    {
        $bannerandmeta = BannerAndMetaTag::find(3);
        $locations = Contactus::orderBy('sort_order')->active()->get();


        return view('frontend::contact', compact('bannerandmeta', 'locations'));
    }
    public function structure()
    {
        $bannerandmeta = BannerAndMetaTag::find(2);
        $structure_cms = StructureCms::first();
        $key_elements = KeyElement::orderBy('sort_order')->active()->get();
        return view('frontend::structureoverview', compact('bannerandmeta', 'structure_cms', 'key_elements'));

    }

    public function news()
    {
        $bannerandmeta = BannerAndMetaTag::find(4);
        $newsandevents = NewsEvents::orderBy('date', 'desc')->active()->get();
        return view('frontend::newsevents', compact('bannerandmeta', 'newsandevents'));
    }

    public function newsdetails($slug)
    {
        $bannerandmeta = BannerAndMetaTag::find(4);
        $newsandevents = NewsEvents::where('slug', $slug)->first();
        if($newsandevents) {
            $related_news = NewsEvents::where('id', '!=', $newsandevents->id)
                ->limit(8)
                ->get();
            return view('frontend::newsdetails', compact('newsandevents', 'bannerandmeta', 'related_news'));
        } else {
            abort(404);
        }
    }
}
