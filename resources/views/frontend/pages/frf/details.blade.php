@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1> Details</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h1>{{$frfData->title}}</h1>
                @if($frfData->image)
                    <img src="{{url($frfData->image)}}" class="card-img-top" alt="...">
                @endif
                <p>
                    {!! $frfData->description !!}
                </p>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Related Topic</h1>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            @foreach($relatedData as $rNews)
                                <li>
                                    <a href="{{route('financial-reports-funding',$rNews->slug)}}">{{$rNews->title}}</a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

