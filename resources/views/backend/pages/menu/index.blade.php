@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><i class="bi bi-eye-fill"></i> Menu List
                                <a href="{{route('admin-menu.create')}}">Add Menu</a>
                            </h1>
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
                                               required class="form-control">
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
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Icons</th>
                                    <th>Url</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $key1 = 1;
                                if (isset($_GET['page']) && $_GET['page'] != '') {
                                    $key1 = 5 * ($_GET['page'] - 1) + 1;
                                } ?>
                                @foreach($menuData as $key=>$page)
                                    <tr>
                                        <td>{{$key1++}}</td>
                                        <td>
                                            {{$page->name}}
                                        </td>
                                        <td>
                                            {{$page->slug}}
                                        </td>
                                        <td>
                                            {{$page->icons}}
                                        </td>
                                        <td>
                                            {{$page->url}}
                                        </td>
                                        <td>
                                            {{$page->order}}
                                        </td>

                                        <td>
                                            <form action="{{route('admin-menu.destroy',$page->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('admin-menu.edit',$page->id)}}"
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
                            {{$menuData->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection




