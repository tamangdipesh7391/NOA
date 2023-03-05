@extends('frontend.master.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Account</h1>
                {{$user ?? ''}}
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="card-title mb-4">
                                    <i class="fa fa-users"></i> Member Details
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-8">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="name">Name:
                                                <a style="color: red;text-decoration: none;">
                                                    @if($errors->has('name'))
                                                        {{$errors->first('name')}}
                                                    @endif
                                                </a>
                                            </label>
                                            <input type="text"
                                                   value="{{$user->name ?? old('name')}}"
                                                   id="name"
                                                   name="name" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="email">Email:
                                                        <a style="color: red;text-decoration: none;">
                                                            @if($errors->has('email'))
                                                                {{$errors->first('email')}}
                                                            @endif
                                                        </a>
                                                    </label>
                                                    <input type="text" value="{{$user->email ?? old('email')}}"
                                                           id="email"
                                                           name="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
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
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="phone">Phone:
                                                        <a style="color: red;text-decoration: none;">
                                                            @if($errors->has('phone'))
                                                                {{$errors->first('phone')}}
                                                            @endif
                                                        </a>
                                                    </label>
                                                    <input type="text" value="{{$user->phone ?? old('phone')}}"
                                                           id="phone"
                                                           name="phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="date_of_birth">Date of Brith:
                                                        <a style="color: red;text-decoration: none;">
                                                            @if($errors->has('date_of_birth'))
                                                                {{$errors->first('date_of_birth')}}
                                                            @endif
                                                        </a>
                                                    </label>
                                                    <input type="date"
                                                           value="{{$user->date_of_birth ?? old('date_of_birth')}}"
                                                           id="date_of_birth"
                                                           name="date_of_birth" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Password:
                                                <a style="color: red;text-decoration: none;">
                                                    @if($errors->has('password'))
                                                        {{$errors->first('password')}}
                                                    @endif
                                                </a>
                                            </label>
                                            <input type="password" value="{{$user->password ?? old('password')}}"
                                                   id="password"
                                                   name="password" class="form-control">
                                        </div>


                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="member_type">Membership type:
                                                <a style="color: red;text-decoration: none;">*
                                                    {{$errors->first('membership_type_id')}}</a>
                                            </label>
                                            <select name="membership_type_id" id="member_type" class="form-control">
                                                <option value="" selected readonly>Select member type</option>
                                                @foreach($memberTypes as $type)
                                                    <option value="{{$type->id}}"
                                                        {{$user->membership_type_id?? old('member_type_id')==$type->id ? 'selected':'' }}
                                                    >{{$type->type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @foreach($memberTypes as $type)
                                                <h3>{{$type->type}}: {{$type->price}}</h3>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-success">
                                            Next
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

@endsection
