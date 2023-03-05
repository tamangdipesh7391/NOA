<?php
$eventsData = CommonHelper::getAllEventsData();

?>

@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1>Events</h1>
            </div>
        </div>
        <div class="row">
            @foreach($eventsData as $events)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        @if($events->image)
                            <img src="{{url($events->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$events->title}}</h5>
                            <p class="card-text">
                                {!! $events->getLimitDescription() !!}
                            </p>
                            <a href="{{route('events',$events->slug)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        
    </div>
@endsection

