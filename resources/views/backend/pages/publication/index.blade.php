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
                                Publication List
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Files</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($publicationData as $key=>$publication)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$publication->title}}   </td>
                                        <td>{{$publication->type}}</td>
                                        <td>
                                            @if($publication->getFiles->count()>0)
                                                <a href="{{route('admin-publication.show',$publication->id)}}">Total
                                                    File: {{$publication->getFiles->count()}}</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($publication->image)
                                                <img src="{{url($publication->image)}}"
                                                     alt="" width="40">
                                            @endif
                                        </td>

                                        <td>
                                            <form
                                                action="{{route('admin-publication.destroy',$publication->id)}}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('admin-publication.show',$publication->id)}}"
                                                   class="btn btn-info">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a>
                                                <a href="{{route('admin-publication.edit',$publication->id)}}"
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
                        <div class="col-md-12">
                            <div class="float-right">
                                {{$publicationData->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection




