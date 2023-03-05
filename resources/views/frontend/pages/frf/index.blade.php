@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1> List</h1>
            </div>
        </div>
        <div class="row">
            @foreach($frfData as $fr)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        @if($fr->image)
                            <img src="{{url($fr->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$fr->title}}</h5>
                            <p class="card-text">
                                {!! $fr->getLimitDescription() !!}
                            </p>
                            <a href="{{route('financial-reports-funding',$fr->slug)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection

