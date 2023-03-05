<?php

$newsData = CommonHelper::getNewsData();

?>

    <!--==============News Slider Section =================-->
<style>

    #news-slider {
        margin-top: 80px;
    }

    .post-slide {
        background: #fff;
        margin: 20px 15px 20px;
        border-radius: 15px;
        padding-top: 1px;
        box-shadow: 0px 14px 22px -9px #bbcbd8;
    }

    .post-slide .post-img {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: -12px 15px 8px 15px;
        margin-left: -10px;
    }

    .post-slide .post-img img {
        width: 100%;
        height: auto;
        transform: scale(1, 1);
        transition: transform 0.2s linear;
    }

    .post-slide:hover .post-img img {
        transform: scale(1.1, 1.1);
    }

    .post-slide .over-layer {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        background: linear-gradient(-45deg, rgba(6, 190, 244, 0.75) 0%, rgba(45, 112, 253, 0.6) 100%);
        transition: all 0.50s linear;
    }

    .post-slide:hover .over-layer {
        opacity: 1;
        text-decoration: none;
    }

    .post-slide .over-layer i {
        position: relative;
        top: 45%;
        text-align: center;
        display: block;
        color: #fff;
        font-size: 25px;
    }

    .post-slide .post-content {
        background: #fff;
        padding: 2px 20px 40px;
        border-radius: 15px;
    }

    .post-slide .post-title a {
        font-size: 15px;
        font-weight: bold;
        color: #333;
        display: inline-block;
        text-transform: uppercase;
        transition: all 0.3s ease 0s;
    }

    .post-slide .post-title a:hover {
        text-decoration: none;
        color: #3498db;
    }

    .post-slide .post-description {
        line-height: 24px;
        color: #808080;
        margin-bottom: 25px;
    }

    .post-slide .post-date {
        color: #a9a9a9;
        font-size: 14px;
    }

    .post-slide .post-date i {
        font-size: 20px;
        margin-right: 8px;
        color: #CFDACE;
    }

    .post-slide .read-more {
        padding: 7px 20px;
        float: right;
        font-size: 12px;
        background: #2196F3;
        color: #ffffff;
        box-shadow: 0px 10px 20px -10px #1376c5;
        border-radius: 25px;
        text-transform: uppercase;
    }

    .post-slide .read-more:hover {
        background: #3498db;
        text-decoration: none;
        color: #fff;
    }

    .owl-controls .owl-buttons {
        text-align: center;
        margin-top: 20px;
    }

    .owl-controls .owl-buttons .owl-prev {
        background: #fff;
        position: absolute;
        top: -13%;
        left: 15px;
        padding: 0 18px 0 15px;
        border-radius: 50px;
        box-shadow: 3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }

    .owl-controls .owl-buttons .owl-next {
        background: #fff;
        position: absolute;
        top: -13%;
        right: 15px;
        padding: 0 15px 0 18px;
        border-radius: 50px;
        box-shadow: -3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }

    .owl-controls .owl-buttons .owl-prev:after,
    .owl-controls .owl-buttons .owl-next:after {
        content: "\f104";
        font-family: FontAwesome;
        color: #333;
        font-size: 30px;
    }

    .owl-controls .owl-buttons .owl-next:after {
        content: "\f105";
    }

    @media only screen and (max-width: 1280px) {
        .post-slide .post-content {
            padding: 0px 15px 25px 15px;
        }
    }
</style>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Eye Health Topics</h2>
        </div>
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                @foreach($newsData as $news)
                    <div class="post-slide">
                        <div class="post-img">
                            @if($news->image)
                                <img src="{{url($news->image)}}"
                                     alt="">
                            @endif
                            <a href="{{route('news',$news->slug)}}" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="{{route('news',$news->slug)}}">
                                    {{$news->title}}
                                </a>
                            </h3>
                            <p class="post-description">
                                {!! $news->getLimitDescription() !!}
                            </p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>{{$news->created_at}}</span>
                            <a href="{{route('news',$news->slug)}}" class="read-more">read more</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
