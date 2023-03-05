<?php
$activitiesData = CommonHelper::getActivitiesData();

?>

@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1>Activities</h1>
            </div>
        </div>
        <div class="row">
            @foreach($activitiesData as $activities)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        @if($activities->image)
                            <img src="{{url($activities->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$activities->title}}</h5>
                            <p class="card-text">
                                {!! $activities->getLimitDescription() !!}
                            </p>
                            <a href="{{route('activities',$activities->slug)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $activitiesData->links() }}
            </div>
        </div>
    </div>
@endsection

