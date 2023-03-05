@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <!--<div class="row">
            <div class="col-md-12 mb-5">
                <h1>Activities Details</h1>
            </div>
        </div>-->
        <div class="row">
            <div class="col-md-8">
                <h1>{{$eventsData->title}}</h1>
                @if($eventsData->image)
                    <img src="{{url($eventsData->image)}}" class="card-img-top" alt="...">
                @endif
                <p>
                    {!! $eventsData->description !!}
                </p>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Related Events</h3>
                    </div>
                    <div class="col-md-12">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

