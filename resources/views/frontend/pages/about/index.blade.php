@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$aboutUsData->title}}</h1>
            </div>
            <div class="col-md-12">
                @if($aboutUsData->image)
                    <img src="{{url($aboutUsData->image)}}" alt="{{$aboutUsData->title}}"
                         class="img-fluid">
                @endif
            </div>
            <div class="col-md-12">
                {!! $aboutUsData->description !!}
            </div>
        </div>
    </div>
@endsection
