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
                                Add Municipality
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
                                            <label for="municipality_name">Municipality name:
                                                <a style="color: red;">{{$errors->first('municipality_name')}}</a>
                                            </label>
                                            <input type="text" name="municipality_name"
                                                   value="{{old('municipality_name')}}" id="municipality_name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form group">
                                            <button class="btn btn-success" style="margin-top: 26px;">
                                                <i class="fa fa-plus"></i> Add Municipality
                                            </button>
                                        </div>
                                    </div>

                                </div>


                            </form>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-eye"></i> Show Municipality
                                    </h2>
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
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <td>S.n</td>
                                                    <td>Municipality Name</td>
                                                    <td>Action</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($municipalitiesData as $key=>$mun)
                                                    <tr>
                                                        <td>{{++$key}}</td>
                                                        <td>{{$mun->municipality_name}}

                                                        </td>
                                                        <td>
                                                            <a href="{{route('edit-municipalities',$mun->id)}}"
                                                               class="btn btn-success">
                                                                <i class="fa fa-edit"></i> Edit</a>
                                                            <a href="{{route('delete-municipalities',$mun->id)}}"
                                                               class="btn btn-danger">
                                                                <i class="fa fa-trash"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


