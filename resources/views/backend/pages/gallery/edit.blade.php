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
                                Update Images
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                @include('backend.layouts.message')
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('admin-gallery.update',$galleryData->id)}}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="title">Title <a href=""
                                                                                style="color: red;">*{{$errors->first('title')}}</a></label>
                                                    <input type="text" name="title" id="title"
                                                           value="{{$galleryData->title}}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="photos">Photos:
                                                        <span>Upload multiple photos</span>
                                                        <a href=""
                                                           style="color: red;">{{$errors->first('photos')}}</a></label>
                                                    <input type="file" name="photos[]" id="photos"
                                                           multiple class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <button class="btn btn-success" style="margin-top: 25px;">
                                                        <i class="fa fa-plus"></i> Update
                                                        Gallery
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-4">
                            <h1>Related Images</h1>
                            <div class="row">
                                @foreach($galleryData->allImages as $image)
                                    <div class="col-md-4">
                                        <img style="width: 100%; display: block;"
                                             src="{{url($image->image_name)}}" alt="image">

                                        <a class="btn-sm btn-danger mt-3"  href="{{route('delete-galley-image',$image->id)}}">
                                            <i class="fa fa-times"></i> Delete</a>

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




