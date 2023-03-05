@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>
                                <i class="bi bi-eye-fill"></i> Update Gallery Image
                                <a href="{{route('college-admin.index')}}" class="btn btn-success">
                                    <i class="bi bi-bag-plus-fill"></i> Show List</a>
                            </h1>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    @if($galleryData->image)
                                        <img src="{{url($galleryData->image)}}"
                                             id="image_show" alt=""
                                             style="width: 100%;height: 300px;">
                                    @else
                                        <img src="{{url('icons/ui.png')}}"
                                             id="image_show" alt=""
                                             style="width: 100%;height: 300px;">
                                    @endif
                                    <div class="choose_file">
                                        <span><i class="fa fa-upload"></i> Select Image</span>
                                        <input name="image[]" multiple type="file" id="change_image">
                                    </div>
                                    <a style="color: red;">{{$errors->first('image.*')}}</a>
                                </div>
                                <div class="form-group mt-3">
                                    <button class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i>
                                        Update Image</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
