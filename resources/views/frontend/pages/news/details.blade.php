@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <!--<div class="row">
            <div class="col-md-12 mb-5">
                <h1>News Details</h1>
            </div>
        </div>-->
        <div class="row">
            <div class="col-md-8">
                <h1>{{$newsData->title}}</h1>
                @if($newsData->image)
                    <img src="{{url($newsData->image)}}" class="card-img-top" alt="...">
                @endif
                <p>
                    {!! $newsData->description !!}
                </p>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Related Eye Health Topics</h3>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            @foreach($relatedNews as $rNews)
                                <li>
                                    <a href="{{route('news',$rNews->slug)}}">{{$rNews->title}}</a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

