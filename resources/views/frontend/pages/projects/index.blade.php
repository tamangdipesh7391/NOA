@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1>Our List</h1>
            </div>
        </div>
        <div class="row">
            @foreach($projectsData as $project)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        @if($project->image)
                            <img src="{{url($project->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$project->title}}</h5>
                            <p class="card-text">
                                {!! $project->getLimitDescription() !!}
                            </p>
                            <a href="{{route('our-projects',$project->slug)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
