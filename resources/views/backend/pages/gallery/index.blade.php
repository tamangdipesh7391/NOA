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
                                Manage Gallery
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
                                <div class="col-md-12 mb-3">
                                    <form action="{{route('admin-gallery.store')}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="title">Title <a href=""
                                                                                style="color: red;">*{{$errors->first('title')}}</a></label>
                                                    <input type="text" name="title" id="title"
                                                           value="{{old('title')}}"
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
                                                    <button class="btn btn-success" style="margin-top: 18px;">
                                                        <i class="fa fa-plus"></i> Create
                                                        Gallery
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($galleryData as $key=>$gallery)

                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$gallery->title}}</td>
                                                <td>
                                                    @if($gallery->status==1)
                                                        <button name="enable" class="btn-xs btn-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                    @else
                                                        <button name="disable" class="btn-xs btn-danger">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="">Total {{$gallery->totalGalleryImage()}}
                                                        Images: </a>
                                                </td>

                                                <td>
                                                    <form
                                                        action="{{route('admin-gallery.destroy',$gallery->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{route('admin-gallery.show',$gallery->id)}}"
                                                           class="btn btn-info">
                                                            <i class="fa fa-eye"></i> Show</a>
                                                        <a href="{{route('admin-gallery.edit',$gallery->id)}}"
                                                           class="btn btn-primary" title="edit">
                                                            <i class="fa fa-edit"></i> Edit</a>
                                                        <button class="btn btn-danger" title="Delete">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection




