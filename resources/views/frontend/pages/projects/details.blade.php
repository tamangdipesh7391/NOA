@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1>Project Details</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h1>{{$projectData->title}}</h1>
                @if($projectData->image)
                    <img src="{{url($projectData->image)}}" class="card-img-top" alt="...">
                @endif
                <p>
                    {!! $projectData->description !!}
                </p>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Related Project</h1>
                    </div>
                    <div class="col-md-12">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

