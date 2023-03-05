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
                                Update Partners
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
                            <form action="{{route('admin-partners.update',$partnersData->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="link">Links</label>
                                    <input type="text" name="link" id="link"
                                           value="{{$partnersData->link}}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1"
                                            {{$partnersData->status=='1' ?'selected' :''}}
                                        > Active
                                        </option>
                                        <option value="0"
                                            {{$partnersData->status=='0' ?'selected' :''}}
                                        >Inactive
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="order">Order</label>
                                    <input type="number" name="order" id="order" value="{{$partnersData->order}}"
                                           class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image">Logo</label> <br>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button class="btn btn-success">
                                        <i class="fa fa-edit"></i> Update Partner
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
