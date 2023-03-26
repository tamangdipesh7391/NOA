@extends('frontend.members.layouts')

@section('member-content')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <!-- session  -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{session('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>
                                <i class="fa fa-edit"></i>
                                Update Voucher
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
                                <div class="col-md-8">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="image">Voucher:
                                                <a style="color: red;text-decoration: none;">
                                                    {{$errors->first('voucher')}}
                                                </a>
                                            </label>
                                            <input type="file" class="form-control" name="voucher">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">
                                                <i class="fa fa-upload"></i>
                                                Upload Voucher
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    @include('frontend.layouts.qr-code')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    @if(Auth::guard('web')->user()->voucher_file === "commented")
                                    <?php
                                        $path = Auth::guard('web')->user()->voucher_file;
                                        $fullPath = ($path) ? asset('storage/app/').$path : "";
                                    ?>
                                        <img src="{{ asset('storage/app/'.$path) }}"
                                             alt="admin" download
                                             class="img-fluid">
                                        <hr>
                                        <a href="{{ asset('storage/app/'.$path) }}" download>
                                            Download
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
