@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><i class="bi bi-eye-fill"></i> Menu Details
                                <a href="{{route('admin-menu.index')}}"
                                class="btn btn-success"> Goto Menu List</a>
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>
                        <div class="col-md-12">
                            <h3>Name: {{$menuData->name}}</h3>
                            <h3>Slug: {{$menuData->slug}}</h3>
                            <h3>Icon: {{$menuData->icon}}</h3>
                            <h3>Url: {{$menuData->url}}</h3>
                            <h3>Order: {{$menuData->order}}</h3>
                            <h3>Created At: {{$menuData->created_at}}</h3>
                            <h3>Update At: {{$menuData->updated_at}}</h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection




