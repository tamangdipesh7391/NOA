@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1>Awards</h1>
            </div>
        </div>
        <div class="row">
            @foreach($awardsData as $awards)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        @if($awards->image)
                            <img src="{{url($awards->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$awards->title}}</h5>
                            <p class="card-text">
                                {!! $awards->getLimitDescription() !!}
                            </p>
                            <a href="{{route('awards',$awards->slug)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection

