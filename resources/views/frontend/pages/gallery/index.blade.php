@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1> List</h1>
            </div>
        </div>
        <div class="row">
            @foreach($galleryData as $gallery)
                <div class="col-md-12 mb-5">
                    <h3>{{$gallery->title}}</h3>
                    <div class="row">
                        @foreach($gallery->allImages as $images)
                            <div class="col-md-3">
                                @if($images->image_name)
                                    <img src="{{url($images->image_name)}}"
                                         class="img-fluid" alt="">

                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection

