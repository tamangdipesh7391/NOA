@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>
                                <i class="bi bi-lock-fill"></i>
                                Update Password
                            </h1>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @include('backend.layouts.message')
                            </div>
                            <div class="col-md-12">
                                <form action="{{route('admin-password-change')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group mb-3">
                                        <label for="password">Old Password: <a
                                                style="color: red;">{{$errors->first('old_password')}}</a></label>
                                        <input type="password" name="old_password" id="password"
                                               class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password: <a
                                                style="color: red;">{{$errors->first('password')}}</a></label>
                                        <input type="password" name="password" id="password"
                                               class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation">Confirm Password: <a
                                                style="color: red;">{{$errors->first('password_confirmation')}}</a></label>
                                        <input type="password" name="password_confirmation"
                                               id="password_confirmation"
                                               class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <button class="btn btn-success">
                                            <i class="bi bi-lock"></i> Change Password
                                        </button>
                                        <a href="{{route('dashboard')}}" class="btn btn-primary float-end">
                                            <i class="bi bi-arrow-right-circle-fill"></i> Goto home</a>
                                    </div>

                                </form>
                                <hr>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- /page content -->

@endsection
