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
                                Add About US
                                <a href="{{route('admin-about.index')}}"
                                   class="btn btn-success bx-pull-right">
                                    Go to index
                                </a>
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2><a href="">Title: {{$contentData->title}}</a></h2>
                            <h2><a href="">Slug: {{$contentData->slug}}</a></h2>
                            <p>Meta Description:
                                {!! $contentData->meta_description !!}
                            </p>
                            <p> Description:
                                {!! $contentData->description !!}
                            </p>

                        </div>
                        <div class="col-md-4">
                            @if($contentData->image)
                                <img src="{{url($contentData->image)}}"
                                     class="img-fluid" alt="">
                            @endif
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{route('admin-content.index')}}"
                               class="btn btn-success">
                                <i class="fa fa-hand-o-left"></i> Goto Content List</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
