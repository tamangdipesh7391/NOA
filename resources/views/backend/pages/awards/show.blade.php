@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-3">
                            <h1>
                                <i class="bi bi-eye-fill"></i>
                                Awards Details

                                <a href="{{route('admin-awards.index')}}"
                                   class="btn btn-success">
                                    <i class="bi bi-arrow-right-circle-fill"></i> Goto Index Page</a>
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <span class="badge bg-success"> Created At: {{$awardsData->created_at}}</span>
                            <span class="badge bg-primary"> Created At: {{$awardsData->created_at}}</span>
                            <hr>
                            <h1><a href="">{{$awardsData->name}}</a></h1>
                            <p>Meta Title:
                                {!! $awardsData->meta_title !!}
                            </p>
                            <p>Meta Description:
                                {!! $awardsData->meta_description !!}
                            </p>
                            <p> Intro Text:
                                {!! $awardsData->intro_text !!}
                            </p>
                            <p>
                                {!! $awardsData->description !!}
                            </p>

                        </div>
                        <div class="col-md-4">
                            @if($awardsData->image)
                                <img src="{{url($awardsData->image)}}"
                                     class="img-fluid"
                                     alt="image not found">

                                @endif
                        </div>
                        <div class="col-md-12 mt-5 mb-5">
                            <hr>
                            <a href="{{route('admin-awards.index')}}"
                               class="btn btn-sm btn-primary">
                                <i class="bi bi-arrow-right-circle-fill"></i> Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection

