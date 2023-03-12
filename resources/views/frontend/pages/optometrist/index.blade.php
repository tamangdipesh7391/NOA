@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-2">
                <h1>Our top Optometrists</h1>
            </div>
            <!-- <div class="col-md-8">
                <input type="text" id="search_optometrist" name="search_optometrist" placeholder="Search top optometrist here..." class="form-control">
            </div> -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-md-12">
                <form action="{{route('searchOptometrists')}}" method="post" class="form-group">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <input type="text" name="name" placeholder="Search top optometrist here..." class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if (count($optometrists) > 0)
            <div class="row">
                @foreach($optometrists as $optometrist)
                    <div class="col-md-3 mb-5">
                        <div class="card">
                            @if($optometrist->profile->image)
                                <img src="{{url($optometrist->profile->image)}}" class="card-img-top" alt="...">
                            @else
                                <img src="{{url('/optometrist/optometrist.PNG')}}" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{$optometrist->name}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @else
            <div class="row">
                <div class="col-md-12">
                    <h3>No optometrist found</h3>
                </div>
            </div>
        @endif

    </div>
@endsection

