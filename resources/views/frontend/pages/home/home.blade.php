<?php
$eventsData = CommonHelper::getEventsData();
$bannerData = CommonHelper::getBannerData();
$partnersData = CommonHelper::getPartnersData();
$welContent = CommonHelper::welcomeContent();

?>

@extends('frontend.master.master')
@section('content')

    <!--==============Slider Section=================-->
    <div style="width: 100%;">
        <div id="carouselExampleCaptions" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($bannerData as $key=>$banner)
                    @if($key==0)
                        <div class="carousel-item active">
                            @if($banner->image)
                                <img src="{{url($banner->image)}}" class="w-100" style="height: 460px" alt="...">
                            @endif
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$banner->title}}</h5>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item">
                            @if($banner->image)
                                <img src="{{url($banner->image)}}" class="w-100" style="height: 460px" alt="...">
                            @endif
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$banner->title}}</h5>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--==============End Slider Section=================-->

    <div class="main-section">
        <div class="container mt-5">
            <div class="row">
                    @foreach($welContent->getContent as $content)
                        <div class="col-md-4">
                            <div class="home-box-content">
                                <h3> {{$content->title}}</h3>
                                <p>
                                    {!! $content->description !!}
                                </p>
                            </div>

                        </div>
                    @endforeach
                </div>
            <div class="row">
                <!--<div class="col-md-12 mb-3">
                    <h1>{{$welContent->title}}</h1>
                </div>-->
                <div class="col-md-12 mb-3">
                    <p>
                        {!! $welContent->description !!}
                    </p>

                </div>
                

            </div>

        </div>
    </div>

    
    

    <!--==============End Project  Section=================-->

    <!--==============News Slider Section =================-->
    @include('frontend.components.news-slider')
    <!--==============End News Slider Section =================-->

    <!--events start-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-4">
                <h1>Recent Events</h1>
            </div>
            @foreach($eventsData as $event)
                <div class="col-md-3 mb-3">
                    <a href="{{route('events',$event->slug)}}">
                    <figure class="snip1253 snipnew">
                        <div class="image">
                            @if($event->image)
                                <img
                                    src="{{url($event->image)}}"
                                    alt="{{$event->title}}"/>
                            @endif
                        </div>
                        <figcaption>
                            <div class="date"><span class="day">01</span><span class="month">Jan</span></div>
                            <h3>{{$event->title}}</h3>
                            <p>
                                {!! $event->getLimitDescription() !!}
                            </p>
                        </figcaption>
                        <footer>
                            <div class="views">Read more</div>
                        </footer>
                        
                    </figure>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
<!--event ends-->

    <div class="container mb-5 mt-5">
        <h2 class="mb-5">Our Partners</h2>
        <div class="container">
            <section class="customer-logos slider">
                @foreach($partnersData as $partner)
                    <div class="slide"><a href="#"><img src="{{url($partner->image)}}"></a></div>
                @endforeach
            </section>
        </div>
    </div>

@endsection
