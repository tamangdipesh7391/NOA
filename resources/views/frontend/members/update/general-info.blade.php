@extends('frontend.members.layouts')

@section('member-content')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-edit"></i> Update General Info</h2>
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
                                                <div class="form-group">
                                                    <label for="name">Name:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('name')}}</a>
                                                    </label>
                                                    <input type="text" name="name" id="name"
                                                           placeholder="Full name"
                                                           value="{{$userData->name}}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="gender">Gender:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('gender')}}</a>
                                                    </label>
                                                    <select name="gender" id="gender"
                                                            class="form-control">
                                                        <option value="" selected readonly>Select Gender</option>
                                                        <option
                                                            value="male" {{$userData->gender=='male'?'selected':''}}>
                                                            Male
                                                        </option>
                                                        <option
                                                            value="female" {{$userData->gender=='female'?'selected':''}}>
                                                            Female
                                                        </option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Email:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('email')}}</a>
                                                    </label>
                                                    <input type="email" name="email" id="email"
                                                           placeholder="Enter email"
                                                           value="{{$userData->email}}"
                                                           class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="phone">Phone:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('phone')}}</a>
                                                    </label>
                                                    <input type="text" name="phone" id="phone"
                                                           value="{{$userData->phone}}"
                                                           class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dob">Date of Birth:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('dob')}}</a>
                                                    </label>
                                                    <input type="date" name="date_of_birth" id="dob"
                                                           value="{{$userData->date_of_birth}}"
                                                           class="form-control">
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Member Types:</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="member_type_id">Select member type:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('front_size')}}</a>
                                                    </label>
                                                    <select name="membership_type_id" id="member_type_id"
                                                            class="form-control">
                                                        <option value="{{$userData->memberType->id}}">
                                                            {{$userData->memberType->type}}
                                                        </option>
                                                        @foreach($memberTypes as $type)
                                                            <option value="{{$type->id}}"
                                                                {{old('membership_type_id')==$type->id ? 'selected':'' }}
                                                            >{{$type->type}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    @foreach($memberTypes as $type)
                                                        <h1 class="is-size-5">{{$type->type}}
                                                            : {{$type->price}}</h1>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-success">
                                                    <i class="fa fa-plus" aria-hidden="true"></i> Update Account
                                                </button>
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
