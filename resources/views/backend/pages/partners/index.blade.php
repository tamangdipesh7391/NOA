@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h1>
                                <i class="bi bi-bag-plus-fill"></i>
                                Manage Partners
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
                            <form action="{{route('admin-partners.store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="link">Links</label>
                                    <input type="text" name="link" id="link"
                                           class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image">Logo</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button class="btn btn-success">
                                        <i class="fa fa-plus"></i> Add Partner
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 mt-5">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>S.n</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($partnersData as $key=>$partner)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$partner->link}}</td>
                                        <td>{{$partner->status}}</td>
                                        <td>{{$partner->order}}</td>
                                        <td>
                                            <img src="{{url($partner->image)}}" width="50" alt="">
                                        </td>
                                        <td>
                                            <form action="{{route('admin-partners.destroy',$partner->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('admin-partners.edit',$partner->id)}}"
                                                   class="btn btn-primary">
                                                    <i class="fa fa-pencil-square"></i> Edit</a>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
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
        </section>
    </main>

@endsection
