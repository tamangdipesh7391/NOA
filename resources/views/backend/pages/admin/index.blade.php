@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-2 mb-4">
                            <h2>
                                <i class="bi bi-eye-fill"></i> Admin User List
                                <a href="{{route('college-admin.create')}}" class="btn btn-success">
                                    <i class="bi bi-bag-plus-fill"></i> Add New</a>

                            </h2>
                        </div>
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-10">
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
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>S.n</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Login Status</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $key1 = 1;
                                if (isset($_GET['page']) && $_GET['page'] != '') {
                                    $key1 = 4 * ($_GET['page'] - 1) + 1;
                                } ?>
                                @if($adminData->count()>0)
                                    @foreach($adminData as $key=>$admin)
                                        <tr>
                                            <td>{{$key1++}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->username}}</td>
                                            <td>{{$admin->gender}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>
                                                @if($admin->login_status == 1)
                                                    <span class="btn-sm btn-success">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </span>
                                                @else
                                                    <span class="btn-sm btn-warning">
                                                    <i class="bi bi-power"></i>
                                                </span>
                                                @endif
                                            </td>
                                            <td>{{$admin->role}}</td>
                                            <td>
                                                <form action="{{route('college-admin.destroy',$admin->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('college-admin.show',$admin->id)}}"
                                                       title="View"
                                                       class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    <a href="{{route('college-admin.edit',$admin->id)}}"
                                                       title="Update"
                                                       class="btn btn-sm btn-success">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="9" class="text-center">
                                            No Data Found
                                            <br>
                                            <a href="{{route('college-admin.index')}}">Show All List</a>
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <div class="float-right">
                                {{$adminData->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
