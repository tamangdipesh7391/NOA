@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                Details
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2><a href="">Title: {{$contentTypeData->title}}</a></h2>
                            <h2><a href="">Slug: {{$contentTypeData->slug}}</a></h2>

                            <p> Description:
                                {!! $contentTypeData->description !!}
                            </p>

                        </div>
                        <div class="col-md-4">
                            @if($contentTypeData->image)
                                <img src="{{url($contentTypeData->image)}}"
                                     class="img-fluid" alt="">
                            @endif
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{route('admin-content-type.index')}}"
                               class="btn btn-success">
                                <i class="fa fa-hand-o-left"></i> Goto Content Index </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
