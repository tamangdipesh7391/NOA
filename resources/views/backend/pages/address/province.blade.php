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
                                Manage Province

                            </h1>
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
                                            <label for="province_name">Province name:
                                                <a style="color: red;">{{$errors->first('province_name')}}</a>
                                            </label>
                                            <input type="text" name="province_name" value="{{old('province_name')}}"
                                                   id="province_name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form group">
                                            <button class="btn btn-success" style="margin-top: 26px;">
                                                <i class="fa fa-plus"></i> Add Province
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
                                    <td>Name</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($provinceData as $key=>$province)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$province->province_name}}
                                            &ensp;
                                            <a href="{{route('manage-district',$province->id)}}"
                                               class="btn btn-primary">Total
                                                District {{$province->district->count()}}</a>

                                        </td>
                                        <td>
                                            <a href="{{route('edit-province',$province->id)}}"
                                               class="btn btn-success">
                                                <i class="fa fa-edit"></i> Edit</a>
                                            <a href="{{route('delete-province',$province->id)}}"
                                               class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete</a>
                                            <a href="{{route('manage-district',$province->id)}}"
                                               class="btn btn-success">
                                                <i class="fa fa-plus"></i> District</a>
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


