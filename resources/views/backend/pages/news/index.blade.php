@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                List
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                @include('backend.layouts.message')
                            </div>
                            <div class="row">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($newsData as $key=>$news)

                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$news->title}}</td>
                                            <td>

                                                <form action="" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="criteria" value="{{$news->id}}">
                                                    @if($news->status==1)
                                                        <button name="enable" class="btn-xs btn-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                    @else
                                                        <button name="disable" class="btn-xs btn-danger">
                                                            <i class="fa fa-times"></i>
                                                        </button>

                                                    @endif
                                                </form>

                                            </td>
                                            <td>
                                                @if($news->image)
                                                    <img src="{{url($news->image)}}"
                                                         alt="" width="40">
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{route('admin-news.destroy',$news->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{route('admin-news.show',$news->id)}}"
                                                       class="btn-sm btn-info"><i
                                                            class="fa fa-eye"></i></a>
                                                    <a href="{{route('admin-news.edit',$news->id)}}"
                                                       class="btn-sm btn-primary" title="edit">
                                                        <i class="fa fa-edit"></i></a>
                                                    <button class="btn-sm btn-danger" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
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
        </section>
    </main>
@endsection




