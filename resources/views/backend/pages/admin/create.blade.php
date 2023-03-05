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
                                Add New
                                <a href="{{route('college-admin.index')}}" class="btn btn-success">
                                    <i class="bi bi-eye-fill"></i> Show List</a>
                            </h1>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <form action="{{route('college-admin.store')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">
                                            <label for="name">Name : <a
                                                    style="color: red;">{{$errors->first('name')}}</a></label>
                                            <input type="text" name="name" value="{{old('name')}}"
                                                   id="name"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="username">Username: <a
                                                    style="color: red;">{{$errors->first('username')}}</a></label>
                                            <input type="text" name="username" id="username"
                                                   value="{{old('username')}}"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="email">Email: <a
                                                    style="color: red;">{{$errors->first('email')}}</a></label>
                                            <input type="text" name="email" id="email"
                                                   value="{{old('email')}}"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="password">Password: <a
                                                    style="color: red;">{{$errors->first('password')}}</a></label>
                                            <input type="password" name="password" id="password"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="password_confirmation">Confirm Password: <a
                                                    style="color: red;">{{$errors->first('password_confirmation')}}</a></label>
                                            <input type="password" name="password_confirmation"
                                                   id="password_confirmation"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="gender">Gender:<a
                                                    style="color: red;">{{$errors->first('gender')}}</a>
                                            </label>
                                            <select name="gender" id="gender"
                                                    class="form-control">
                                                <option value="" readonly>---Select Gender---</option>
                                                <option value="male" {{old('gender') =='male' ? 'selected' :''}}>Male</option>
                                                <option value="female" {{old('gender') =='female' ? 'selected' :''}}>Female</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <img src="{{url('icons/ui.png')}}"
                                                 id="image_show" alt=""
                                                 style="width: 90%;height: 200px;margin-top: 25px;">
                                            <div class="choose_file">
                                                <span><i class="fa fa-upload"></i> Upload Image</span>
                                                <input name="image[]" type="file" multiple id="change_image">
                                            </div>
                                            <a style="color: red;">{{$errors->first('image')}}</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-success">
                                            <i class="bi bi-bag-plus-fill"></i> Add New
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
