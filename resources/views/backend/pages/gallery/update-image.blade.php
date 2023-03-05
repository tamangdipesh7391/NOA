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
                                Update Gallery
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
                                <div class="col-md-4">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="photos">Image:
                                                <a href=""
                                                   style="color: red;">{{$errors->first('photos')}}</a></label>
                                            <input type="file" name="photos" id="photos"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success" style="margin-top: 25px;">
                                                <i class="fa fa-plus"></i> Update
                                                Image
                                            </button>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-md-8">
                                    <img src="" alt="image here">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection




