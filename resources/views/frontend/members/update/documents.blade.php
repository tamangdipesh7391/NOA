@extends('frontend.members.layouts')

@section('member-content')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-edit"></i> Update Documents</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('backend.layouts.message')
                                </div>
                                <div class="col-md-12">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="">Front Side:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('front_size')}}</a>
                                                    </label>
                                                    <input type="file" name="front_size" id="front_size"
                                                           class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="back_size">Back Side:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('back_size')}}</a>
                                                    </label>
                                                    <input type="file" name="back_size" id="back_size"
                                                           class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="image">Photo (Optional) </label>
                                                    <input type="file" name="image" id="image"
                                                           class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <label for="citizenship_no">Citizenship no:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('citizenship_no')}}</a>
                                                    </label>
                                                    <input type="text" name="citizenship_no" id="citizenship_no"
                                                           value="{{$userData->userAddress->citizenship_no}}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <label for="qualification">Qualification:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('qualification')}}</a>
                                                    </label>
                                                    <input type="text" name="qualification" id="qualification"
                                                           value="{{$userData->userAddress->qualification}}"
                                                           class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <label for="year_of_graduation">Graduation Year:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('year_of_graduation')}}</a>
                                                    </label>
                                                    <input type="date" name="year_of_graduation" id="year_of_graduation"
                                                           value="{{$userData->userAddress->year_of_graduation}}"
                                                           class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <label for="university">University:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('university')}}</a>
                                                    </label>
                                                    <input type="text" name="university" id="university"
                                                           value="{{$userData->userAddress->university}}"
                                                           class="form-control">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <button class="btn btn-success">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Update Documents
                                                    </button>
                                                </div>

                                            </div>
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
