@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-2">
                            <h1>
                                <i class="bi bi-eye-fill"></i>  Events List
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                @include('backend.layouts.message')
                            </div>
                            <div class="col-md-12">
                                <table class="table table-hover">
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
                                    @foreach($eventsData as $key=>$events)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$events->title}}   </td>
                                            <td>
                                                @if($events->status==1)
                                                    <button name="enable" class="btn-xs btn-success">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                @else
                                                    <button name="disable" class="btn-xs btn-danger">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                @endif
                                            </td>
                                            <td>
                                                @if($events->image)
                                                    <img src="{{url($events->image)}}"
                                                         alt="" width="40">
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{route('admin-events.destroy',$events->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{route('admin-events.show',$events->id)}}"
                                                       class="btn btn-info"> <i class="bi bi-eye-fill"></i></a>
                                                    <a href="{{route('admin-events.edit',$events->id)}}"
                                                       class="btn btn-primary" title="edit">
                                                        <i class="bi bi-pencil-square"></i></a>

                                                    <button class="btn-sm btn-danger" title="Delete">
                                                        <i class="bi bi-trash-fill"></i>
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




