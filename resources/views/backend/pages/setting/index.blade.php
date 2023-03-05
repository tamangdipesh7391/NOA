@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-1">
                            <h1>
                                <i class="bi bi-bag-plus-fill"></i>
                                Setting pages
                                <a href="{{route('setting.create')}}">Add Setting</a>
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
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>S.n</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Mobile</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($settingData as $key=>$setting)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$setting->name}}</td>
                                        <td>{{$setting->email}}</td>
                                        <td>{{$setting->address}}</td>
                                        <td>{{$setting->phone}}</td>
                                        <td>{{$setting->mobile}}</td>
                                        <td>
                                            @if($setting->image)
                                                <img src="{{url($setting->image)}}" width="30" alt="">
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{route('setting.destroy',$setting->id)}}"
                                                  method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('setting.edit',$setting->id)}}"
                                                   class="btn btn-success">
                                                    <i class="fa fa-edit"></i></a>
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i>
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
