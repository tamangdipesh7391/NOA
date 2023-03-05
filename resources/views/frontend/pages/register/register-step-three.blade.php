@extends('frontend.master.master')
@section('content')
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="is-size-1">Register New Account</h1>
                {{$errors}}
            </div>
        </div>
        <div class="row">
            <form action="{{route('register.step.three')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4"> Documents Details:
                                <a style="color: red;text-decoration: none;">Citizenship or driving license or
                                    passport</a>
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="citizenship_no">Citizenship no:
                                            <a style="color: red;text-decoration: none;">* {{$errors->first('citizenship_no')}}</a>
                                        </label>
                                        <input type="text" name="citizenship_no" id="citizenship_no"
                                               placeholder="citizenship no"
                                               value="{{old('citizenship_no')}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="qualification">Qualification:
                                            <a style="color: red;text-decoration: none;">* {{$errors->first('qualification')}}</a>
                                        </label>
                                        <input type="text" name="qualification" id="qualification"
                                               value="{{old('qualification')}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="year_of_graduation">Graduation Year:
                                            <a style="color: red;text-decoration: none;">* {{$errors->first('year_of_graduation')}}</a>
                                        </label>
                                        <input type="date" name="year_of_graduation" id="year_of_graduation"
                                               value="{{old('year_of_graduation')}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="university">University:
                                            <a style="color: red;text-decoration: none;">* {{$errors->first('university')}}</a>
                                        </label>
                                        <input type="text" name="university" id="university"
                                               value="{{old('university')}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="">Front Side:
                                            <a style="color: red;text-decoration: none;">* {{$errors->first('front_size')}}</a>
                                        </label>
                                        <input type="file" name="front_size" id="front_size" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="back_size">Back Side:
                                            <a style="color: red;text-decoration: none;">* {{$errors->first('back_size')}}</a>
                                        </label>
                                        <input type="file" name="back_size" id="back_size" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="image">Photo (Optional) </label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <a href="{{route('register.step.two')}}" class="btn btn-info">Previous</a>
                    <button class="btn btn-success">Create Account</button>
                </div>
            </form>
        </div>
    </div>

@endsection

