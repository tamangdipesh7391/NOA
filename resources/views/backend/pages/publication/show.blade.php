@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                <i class="bi bi-eye-fill"></i>
                                Publication Details
                                <a href="{{route('admin-publication.index')}}"
                                   class="btn btn-success">
                                    <i class="bi bi-arrow-right-circle-fill"></i> Goto Index Page</a>
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2><a href="">Title: {{$publicationData->title}}</a></h2>
                            <h2><a href="">Slug: {{$publicationData->slug}}</a></h2>
                            <p>Meta Description:
                                {!! $publicationData->meta_description !!}
                            </p>
                            <p> Description:
                                {!! $publicationData->description !!}
                            </p>

                        </div>
                        <div class="col-md-4">
                            @if($publicationData->image)
                                <img src="{{url($publicationData->image)}}"
                                     class="img-fluid" alt="">
                            @endif
                        </div>
                        <div class="col-md-12 mb-4 mt-3">
                            <hr>
                            <a href="{{route('admin-publication.index')}}"
                               class="btn btn-success">
                                <i class="fa fa-hand-o-left"></i> Back</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Files:</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                @foreach($publicationData->getFiles as $file)
                                    <div class="col-md-3" style="height: 150px;margin: 20px;padding: 20px;
                                        font-size: 20px;">
                                        @if($file->file)
                                            <a href="{{url($file->file)}}" target="_blank">
                                                {{$file->name}}
                                                <hr>
                                                Views
                                            </a>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
