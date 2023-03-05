<?php
$publicationData = CommonHelper::getPublicationData();

?>

@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1>Publications</h1>
            </div>
        </div>
        <div class="row">
            @foreach($publicationData as $publication)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        @if($publication->image)
                            <img src="{{url($publication->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$publication->title}}</h5>
                            <p class="card-text">
                                {!! $publication->getLimitDescription() !!}
                            </p>
                            <a href="{{route('publication',$publication->slug)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $publicationData->links() }}
            </div>
        </div>
    </div>
@endsection

