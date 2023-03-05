<?php

namespace App\Helpers;


use App\Models\Activities\Activities;
use App\Models\Banner\Banner;
use App\Models\Content\ContentType;
use App\Models\Events\Events;
use App\Models\Menu\Menu;
use App\Models\News\News;
use App\Models\Partners\Partners;
use App\Models\Publications\Publications;

class CommonHelper
{

    function getAllMenu()
    {
        return Menu::orderBy('order', 'asc')->get();
    }

    public function getAllEventsData()
    {
        return Events::orderBY('id', 'desc')->get();
    }

    public function getEventsData()
    {
        return Events::orderBY('id', 'desc')->limit(8)->get();
    }

    public function getBannerData()
    {
        return Banner::where('status', '=', true)->orderBy('order', 'asc')->get();
    }

    public function getActivitiesData()
    {
        return Activities::orderBy('id', 'desc')->paginate(12);
    }

    public function getPublicationData()
    {
        return Publications::orderBy('id', 'desc')->paginate(12);
    }

    public function getPartnersData()
    {
        return Partners::orderBy('id', 'desc')->get();
    }

    public function getNewsData()
    {
        return News::orderBy('id', 'desc')->get();
    }

    public function welcomeContent()
    {
        return ContentType::where('slug', '=', 'welcome')->first();
    }

}
