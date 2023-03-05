@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                               Show
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 style="color: red;font-size: 20px;">Please do not update and delete this content.
                                If you want to update and delete
                                please contact to admin or Developer.
                            </h1>
                            <h1 style="color: red;font-size: 20px;">
                                कृपया यो सामग्री अद्यावधिक र नमेट्नुहोस्। यदि तपाइँ अद्यावधिक गर्न
                                र मेटाउन चाहनुहुन्छ भने, कृपया प्रशासक वा विकासकर्तालाई सम्पर्क गर्नुहोस्।
                            </h1>

                        </div>
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
                                @foreach($contentTypeData as $key=>$contentType)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <a href="{{route('admin-content-type.show',$contentType->id)}}">
                                                {{$contentType->title}}
                                            </a>
                                        </td>
                                        <td>
                                            @if($contentType->status==1)
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
                                            @if($contentType->image)
                                                <img src="{{url($contentType->image)}}"
                                                     alt="" width="40">
                                            @endif
                                        </td>

                                        <td>
                                            <form
                                                action="{{route('admin-content-type.destroy',$contentType->id)}}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('admin-content-type.show',$contentType->id)}}"
                                                   title="Details" class="btn btn-info"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="{{route('admin-content-type.edit',$contentType->id)}}"
                                                   class="btn btn-primary" title="Update">
                                                    <i class="fa fa-edit"></i></a>

                                                <button class="btn btn-danger" title="Delete">
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
        </section>
    </main>

@endsection




