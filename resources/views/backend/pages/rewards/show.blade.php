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
                                Rewards Details

                                <a href="{{route('admin-rewards.index')}}"
                                   class="btn btn-success">
                                    <i class="bi bi-arrow-right-circle-fill"></i> Goto Index Page</a>
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <span class="badge bg-success"> Created At: {{$rewardsData->created_at}}</span>
                            <span class="badge bg-primary"> Created At: {{$rewardsData->created_at}}</span>
                            <hr>
                            <h1><a href="">{{$rewardsData->name}}</a></h1>
                            <p>Meta Title:
                                {!! $rewardsData->meta_title !!}
                            </p>
                            <p>Meta Description:
                                {!! $rewardsData->meta_description !!}
                            </p>
                            <p> Intro Text:
                                {!! $rewardsData->intro_text !!}
                            </p>
                            <p>
                                {!! $rewardsData->description !!}
                            </p>

                        </div>
                        <div class="col-md-4">
                            @if($rewardsData->image)
                                <img src="{{url($rewardsData->image)}}"
                                     class="img-fluid"
                                     alt="image not found">

                                @endif
                        </div>
                        <div class="col-md-12 mt-5 mb-5">
                            <hr>
                            <a href="{{route('admin-rewards.index')}}"
                               class="btn btn-sm btn-primary">
                                <i class="bi bi-arrow-right-circle-fill"></i> Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection

