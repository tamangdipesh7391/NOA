@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-3">
                            <h1>
                                <i class="bi bi-eye-fill"></i>
                                Activities List
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('backend.layouts.message')
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
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <table  class="table table-hover">
                                <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $key1 = 1;
                                if (isset($_GET['page']) && $_GET['page'] != '') {
                                    $key1 = 10 * ($_GET['page'] - 1) + 1;
                                } ?>
                                @foreach($activitiesData as $key=>$faculty)
                                    <tr>
                                        <td>{{$key1++}}</td>
                                        <td>{{$faculty->title}}
                                        </td>
                                        <td>
                                            @if($faculty->status==1)
                                                <button name="enable" class="btn-xs btn-success">
                                                    <i class="bi bi-check-square-fill"></i>
                                                </button>
                                            @else
                                                <button name="disable" class="btn-xs btn-danger">
                                                    <i class="bi bi-bag-x-fill"></i>
                                                </button>
                                            @endif
                                        </td>

                                        <td>
                                            <form action="{{route('admin-activities.destroy',$faculty->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('admin-activities.show',$faculty->id)}}"
                                                   class="btn btn-info">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a>
                                                <a href="{{route('admin-activities.edit',$faculty->id)}}"
                                                   class="btn btn-primary" title="edit">
                                                    <i class="bi bi-pencil-square"></i></a>

                                                <button class="btn btn-danger" title="Delete">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$activitiesData->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection




