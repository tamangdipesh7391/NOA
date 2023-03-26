@extends('frontend.master.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h1>Forgot password</h1>
            </div>
            <div class="col-md-12">
                @include('backend.layouts.message')
            </div>
            <div class="col-md-12">
                <form action="{{route('reset-password')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Email:
                            <a style="color: red;text-decoration: none;">
                                {{$errors->first('email')}}
                            </a>
                        </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                   
                    <div class="form-group mb-3">
                        <button class="btn btn-success">
                            Reset password</button>
                    </div>


                </form>
            </div>
        </div>

    </div>

@endsection
