@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                Show
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2><a href="">Title: {{$newsData->title}}</a></h2>
                            <h2><a href="">Slug: {{$newsData->slug}}</a></h2>
                            <p>Meta Description:
                                {!! $newsData->meta_description !!}
                            </p>
                            <p> Description:
                                {!! $newsData->description !!}
                            </p>

                        </div>
                        <div class="col-md-4">
                            @if($newsData->image)
                                <img src="{{url($newsData->image)}}"
                                     class="img-fluid" alt="">
                            @endif
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{route('admin-news.index')}}"
                               class="btn btn-success">
                                <i class="fa fa-hand-o-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
