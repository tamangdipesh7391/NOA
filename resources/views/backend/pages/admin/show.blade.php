@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>
                                <i class="bi bi-eye-fill"></i> Admin Details
                                <a href="{{route('college-admin.index')}}" class="btn btn-success">
                                    <i class="bi bi-bag-plus-fill"></i> Show List</a>
                            </h1>
                        </div>
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <td width="95%">{{$adminData->name}}</td>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td>{{$adminData->username}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$adminData->email}}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{$adminData->gender}}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{$adminData->role}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <h1>Photo Gallery</h1>
                                </div>
                                <div class="col-md-8">
                                    <form action="{{route('admin-gallery-add',$adminData->id)}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="image[]" multiple id="image">
                                        <button>Add Image</button>
                                        <a style="color: red;text-decoration: none;">{{$errors->first('image.*')}}</a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @foreach($adminData->adminGallery as $gallery)
                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    @if($gallery->image)
                                        <img src="{{url($gallery->image)}}" class="card-img-top"
                                             style="height: 200px;width: 100%;" alt="image not found">
                                    @endif
                                    <div style="padding: 10px 0 0 0;">
                                        <a href="{{route('admin-gallery-update',$gallery->id)}}"
                                           class="btn-sm btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                            Update</a>
                                        <a href="{{route('admin-gallery-delete',$gallery->id)}}"
                                           class="btn-sm btn-danger"
                                           onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-trash-fill"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
