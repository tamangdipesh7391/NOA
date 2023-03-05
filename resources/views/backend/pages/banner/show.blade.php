@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                <i class="bi bi-bag-plus-fill"></i>
                                Show Banner
                                <a href="{{route('admin-banner.index')}}"
                                   class="btn btn-success pull-right">
                                    <i class="fa fa-hand-o-right"></i> Goto Index</a>
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a href="">Title: {{$bannerData->title}}</a></h2>
                                <h2><a href="">Slug: {{$bannerData->slug}}</a></h2>

                                <p> Description:
                                    {!! $bannerData->description !!}
                                </p>

                            </div>
                            <div class="col-md-4">
                                @if($bannerData->image)
                                    <img src="{{url($bannerData->image)}}"
                                         class="img-fluid" alt="">
                                @endif
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <a href="{{route('admin-banner.index')}}"
                                   class="btn btn-success">
                                    <i class="fa fa-hand-o-left"></i> Goto Banner Index Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
