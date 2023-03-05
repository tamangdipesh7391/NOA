@extends('backend.master.main')
@section('content')
    <!-- page content -->
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-2">
                            <h1>
                                <i class="bi bi-eye-fill"></i> Events Details
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2><a href="">Title: {{$eventsData->title}}</a></h2>
                            <h2><a href="">Slug: {{$eventsData->slug}}</a></h2>
                            <p>Meta Description:
                                {!! $eventsData->meta_description !!}
                            </p>
                            <p> Description:
                                {!! $eventsData->description !!}
                            </p>

                        </div>
                        <div class="col-md-4">
                            @if($eventsData->image)
                                <img src="{{url($eventsData->image)}}"
                                     class="img-fluid" alt="">
                            @endif
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{route('admin-events.index')}}"
                               class="btn btn-success">
                                <i class="fa fa-hand-o-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
