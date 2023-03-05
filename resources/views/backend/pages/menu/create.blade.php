@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>
                                <i class="bi bi-bag-plus-fill"></i>
                                Add Menu

                                <a href="{{route('admin-menu.index')}}" class="btn btn-primary">
                                    <i class="bi bi-arrow-right-circle-fill"></i> Menu List
                                </a>
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admin-menu.store')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group mb-2 mb-2">
                                    <label for="title">Name <a href=""
                                                               style="color: red;text-decoration: none;">*{{$errors->first('name')}}</a></label>
                                    <input type="text" name="name" id="title" value="{{old('name')}}"
                                           class="form-control">
                                </div>
                                <div class="form-group mb-2 mb-2">
                                    <label for="slug">Slug <a href=""
                                                              style="color: red;">{{$errors->first('slug')}}</a></label>
                                    <input type="text" name="slug" id="slug"
                                           value="{{old('slug')}}" class="form-control">
                                </div>
                                <div class="form-group mb-2 mb-2">
                                    <label for="icon">Icon <a href=""
                                                              style="color: red;">{{$errors->first('icon')}}</a></label>
                                    <input type="text" name="icon" id="icon"
                                           value="{{old('icon')}}" class="form-control">
                                </div>
                                <div class="form-group mb-2 mb-2">
                                    <label for="url">Url <a href=""
                                                              style="color: red;">{{$errors->first('url')}}</a></label>
                                    <input type="text" name="url" id="url"
                                           value="{{old('url')}}" class="form-control">
                                </div>


                                <div class="form-group mb-2 mb-2">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-bag-plus-fill"></i> Add Menu
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection





