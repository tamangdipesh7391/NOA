@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                <i class="bi bi-bag-plus-fill"></i>
                                Manage Country
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            @if($editCountryData)
                                <form action="{{route('manage-address').'/'.$editCountryData->id}}"
                                      method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Country name:
                                            <a style="color: red;">{{$errors->first('country_name')}}</a>
                                        </label>
                                        <input type="text" name="country_name"
                                               value="{{$editCountryData->country_name}}"
                                               id="name"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="code">Country Code:
                                            <a style="color: red;">{{$errors->first('code')}}</a>
                                        </label>
                                        <input type="text" name="code" value="{{$editCountryData->code}}"
                                               id="code"
                                               class="form-control">
                                    </div>
                                    <div class="form group">
                                        <button class="btn btn-success">
                                            <i class="fa fa-edit"></i> Update Country
                                        </button>
                                    </div>
                                </form>
                            @else
                                <form action="{{route('manage-address')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Country name:
                                            <a style="color: red;">{{$errors->first('country_name')}}</a>
                                        </label>
                                        <input type="text" name="country_name" value="{{old('country_name')}}" id="name"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="code">Country Code:
                                            <a style="color: red;">{{$errors->first('code')}}</a>
                                        </label>
                                        <input type="text" name="code" value="{{old('code')}}" id="code"
                                               class="form-control">
                                    </div>
                                    <div class="form group">
                                        <button class="btn btn-success">
                                            <i class="fa fa-plus"></i> Add Country
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <td>S.n</td>
                                    <td>Name</td>
                                    <td>Code</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($countryData as $key=>$country)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$country->country_name}}
                                            <hr>
                                            <a href="{{route('manage-province',$country->id)}}">Total
                                                Province: {{$country->province->count()}}</a>

                                        </td>
                                        <td>{{$country->code}}</td>
                                        <td>
                                            <a href="{{route('manage-address').'/'.$country->id}}"
                                               class="btn btn-success">
                                                <i class="fa fa-edit"></i> Edit</a>
                                            <a href="{{route('delete-country',$country->id)}}"
                                               class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete</a>
                                            <a href="{{route('manage-province',$country->id)}}" class="btn btn-success">
                                                <i class="fa fa-plus"></i> Province</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection


