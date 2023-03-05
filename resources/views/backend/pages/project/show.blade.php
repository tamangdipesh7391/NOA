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
                                Project Details
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2><a href="">Title: {{$projectData->title}}</a></h2>
                            <h2><a href="">Slug: {{$projectData->slug}}</a></h2>
                            <p>Meta Description:
                                {!! $projectData->meta_description !!}
                            </p>
                            <p> Description:
                                {!! $projectData->description !!}
                            </p>

                        </div>
                        <div class="col-md-4">
                            @if($projectData->image)
                                <img src="{{url($projectData->image)}}"
                                     class="img-fluid" alt="">
                            @endif
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{route('admin-project.index')}}"
                               class="btn btn-success">
                                <i class="fa fa-hand-o-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
