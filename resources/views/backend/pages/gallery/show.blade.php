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
                                Gallery List
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$galleryData->title}}</h1>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                @foreach($galleryImageData as $image)
                                    <div class="col-md-3">
                                        <img style="width: 100%; display: block;"
                                             src="{{url($image->image_name)}}" alt="image">

                                        <div class="mt-2">

                                            <a class="btn-sm btn-primary"
                                               href="{{route('edit-galley-image',$image->id)}}"><i
                                                    class="fa fa-pencil"></i> Update</a>
                                            <a class="btn-sm btn-danger"
                                               href="{{route('delete-galley-image',$image->id)}}"><i
                                                    class="fa fa-times"></i> Delete</a>
                                        </div>

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
