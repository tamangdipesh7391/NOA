@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1>News List</h1>
            </div>
        </div>
        <div class="row">
            @foreach($newsData as $news)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        @if($news->image)
                            <img src="{{url($news->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$news->title}}</h5>
                            <p class="card-text">
                                {!! $news->getLimitDescription() !!}
                            </p>
                            <a href="{{route('news',$news->slug)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection

