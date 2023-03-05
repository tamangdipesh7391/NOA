<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About\About;
use App\Models\Activities\Activities;
use App\Models\Events\Events;
use App\Models\Awards\Awards;
use App\Models\Conference\Conference;
use App\Models\FRAF\FRAF;
use App\Models\Gallery\Gallery;
use App\Models\News\News;
use App\Models\Project\Project;
use App\Models\Publications\Publications;
use App\Models\Rewards\Rewards;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function register(Request $request)
    {
        return view('frontend.auth.register');
    }


    public function aboutUs(Request $request)
    {
        $criteria = $request->criteria;
        $this->data('aboutUsData', About::where('slug', $criteria)->first());
        return view('frontend.pages.about.index', $this->data);
    }

    public function ourProjects(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $projectData = Project::where('slug', $criteria)->first();
            return view('frontend.pages.projects.details', compact('projectData'));
        } else {
            $this->data('projectsData', Project::all());
            return view('frontend.pages.projects.index', $this->data);
        }

    }

    public function activitiesList(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $activitiesData = Activities::where('slug', $criteria)->first();
            return view('frontend.pages.activities.details', compact('activitiesData'));
        } else {
            return view('frontend.pages.activities.index');
        }

    }
    
    public function eventsList(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $eventsData = Events::where('slug', $criteria)->first();
            return view('frontend.pages.events.details', compact('eventsData'));
        } else {
            return view('frontend.pages.events.index');
        }

    }

    public function awardsList(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $awardsData = Awards::where('slug', $criteria)->first();
            return view('frontend.pages.awards.details', compact('awardsData'));
        } else {
            $awardsData = Awards::all();
            return view('frontend.pages.awards.index', compact('awardsData'));
        }

    }

    public function rewardsList(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $rewardsData = Rewards::where('slug', $criteria)->first();
            return view('frontend.pages.rewards.details', compact('rewardsData'));
        } else {
            $rewardsData = Rewards::all();
            return view('frontend.pages.rewards.index', compact('rewardsData'));
        }

    }

    public function newsList(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $newsData = News::where('slug', $criteria)->first();
            $relatedNews = News::where('slug', '!=', $criteria)->get();
            return view('frontend.pages.news.details', compact('newsData', 'relatedNews'));
        } else {
            $newsData = News::all();
            return view('frontend.pages.news.index', compact('newsData'));
        }

    }

    public function frfList(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $frfData = FRAF::where('slug', $criteria)->first();
            $relatedData = FRAF::where('slug', '!=', $criteria)->get();
            return view('frontend.pages.frf.details', compact('frfData', 'relatedData'));
        } else {
            $frfData = FRAF::all();
            return view('frontend.pages.frf.index', compact('frfData'));
        }

    }

    public function conferenceList(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $frfData = Conference::where('slug', $criteria)->first();
            $relatedData = Conference::where('slug', '!=', $criteria)->get();
            return view('frontend.pages.conference.details', compact('frfData', 'relatedData'));
        } else {
            $frfData = Conference::all();
            return view('frontend.pages.conference.index', compact('frfData'));
        }

    }

    public function publicationList(Request $request)
    {
        $criteria = $request->criteria;
        if (!empty($criteria)) {
            $publicationData = Publications::where('slug', $criteria)->first();
            return view('frontend.pages.publication.details', compact('publicationData'));
        } else {
            return view('frontend.pages.publication.index');
        }

    }

    public function galleryList(Request $request)
    {

        $galleryData = Gallery::all();
        return view('frontend.pages.gallery.index', compact('galleryData'));


    }
}
