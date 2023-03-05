@extends('backend.master.main')
@section('content')

    <main id="main" class="main">


        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>
                                <i class="bi bi-pencil-square"></i>
                                Update
                                <a href="{{route('college-admin.index')}}" class="btn btn-success">
                                    <i class="bi bi-eye-fill"></i> Show List</a>
                            </h1>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>
                        <div class="col-md-12">
                            <form action="{{route('college-admin.update',$adminData->id)}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label for="name">Name : <a
                                                    style="color: red;">{{$errors->first('name')}}</a></label>
                                            <input type="text" name="name" value="{{$adminData->name}}"
                                                   id="name"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="username">Username: <a
                                                    style="color: red;">{{$errors->first('username')}}</a></label>
                                            <input type="text" name="username" id="username"
                                                   value="{{$adminData->username}}"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="email">Email: <a
                                                    style="color: red;">{{$errors->first('email')}}</a></label>
                                            <input type="text" name="email" id="email"
                                                   value="{{$adminData->email}}"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="gender">Gender:<a
                                                    style="color: red;">{{$errors->first('gender')}}</a>
                                            </label>
                                            <select name="gender" id="gender"
                                                    class="form-control">
                                                <option value="male" {{$adminData->gender =='male' ? 'selected' :''}}>
                                                    Male
                                                </option>
                                                <option
                                                    value="female" {{$adminData->gender =='female' ? 'selected' :''}}>
                                                    Female
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="role">Role:<a
                                                    style="color: red;">{{$errors->first('role')}}</a>
                                            </label>
                                            <select name="role" id="role"
                                                    class="form-control">
                                                <option value="admin" {{$adminData->role =='admin' ? 'selected' :''}}>
                                                    Admin
                                                </option>
                                                <option
                                                    value="superadmin" {{$adminData->role =='superadmin' ? 'selected' :''}}>
                                                    SuperAdmin
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-success">
                                            <i class="bi bi-bag-plus-fill"></i> Update
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
