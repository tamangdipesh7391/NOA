@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                <i class="fa fa-eye"></i>
                                Show Banner
                                <a href="{{route('admin-banner.create')}}"
                                   class="btn btn-success pull-right">
                                    <i class="fa fa-plus"></i> Add New</a>

                            </h1>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-10" style="padding-right: 2px;">
                                        <input type="text" name="search" placeholder="Enter any keywords"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-2" style="padding-left: 0;">
                                        <button class="btn btn-success">
                                            <i class="bi bi-search"></i> Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>
                        <div class="col-md-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @if($bannerData->count()>0)
                                    <tbody>

                                    @foreach($bannerData as $key=>$banner)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>
                                                <a href="{{route('admin-banner.show',$banner->id)}}">
                                                    {{$banner->title}}
                                                </a>
                                            </td>
                                            <td>
                                                @if($banner->status==1)
                                                    <button name="enable" class="btn-xs btn-success">
                                                        <i class="bi bi-check-circle-fill"></i>
                                                    </button>
                                                @else
                                                    <button name="disable" class="btn-xs btn-danger">
                                                        <i class="bi bi-x-circle"></i>
                                                    </button>
                                                @endif
                                            </td>
                                            <td>
                                                {{$banner->order}}
                                            </td>
                                            <td>
                                                @if($banner->image)
                                                    <img src="{{url($banner->image)}}"
                                                         alt="" width="40">
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{route('admin-banner.destroy',$banner->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{route('admin-banner.show',$banner->id)}}"
                                                       title="Details" class="btn btn-info"> <i
                                                            class="bi bi-eye-fill"></i></a>
                                                    <a href="{{route('admin-banner.edit',$banner->id)}}"
                                                       class="btn btn-primary" title="Update">
                                                        <i class="bi bi-pencil-square"></i></a>

                                                    <button class="btn btn-danger" title="Delete">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <h3 class="mt-2">No Data Found</h3>
                                                <a href="{{route('admin-banner.index')}}">Goto Index</a>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                            </table>
                        </div>

                        <div class="col-md-12">
                            {{$bannerData->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection




