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
                                Manage Dsitrict
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
                        <div class="col-md-12">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="district_name">District name:
                                                <a style="color: red;">{{$errors->first('district_name')}}</a>
                                            </label>
                                            <input type="text" name="district_name"
                                                   value="{{old('district_name')}}" id="district_name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form group">
                                            <button class="btn btn-success" style="margin-top: 26px;">
                                                <i class="fa fa-plus"></i> Add District
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <td>S.n</td>
                                    <td>District Name</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($districtData as $key=>$district)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$district->district_name}}
                                            <hr>
                                            <a href="{{route('manage-municipalities',$district->id)}}">Total
                                                District: </a>

                                        </td>
                                        <td>
                                            <a href="{{route('edit-district',$district->id)}}"
                                               class="btn btn-success">
                                                <i class="fa fa-edit"></i> Edit</a>
                                            <a href="{{route('delete-district',$district->id)}}"
                                               class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete</a>
                                            <a href="{{route('manage-municipalities',$district->id)}}"
                                               class="btn btn-success">
                                                <i class="fa fa-plus"></i> Municipalities</a>
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


