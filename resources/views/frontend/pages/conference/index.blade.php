@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <!-- <div class="row">
            <div class="col-md-12 mb-5">
                <h1> List</h1>
            </div>
        </div> -->
        <!-- <div class="row">
            @foreach($frfData as $fr)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        @if($fr->image)
                            <img src="{{url($fr->image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$fr->title}}</h5>
                            <p class="card-text">
                                {!! $fr->getLimitDescription() !!}
                            </p>
                            <a href="{{route('conference',$fr->slug)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> -->
        @if($frfData->count() > 0)
        <div class="row">
            <div class="col-md-8">
                <h1>{{$frfData[0]->title}}</h1>
                @if($frfData[0]->image)
                    <img src="{{url($frfData[0]->image)}}" class="card-img-top" alt="...">
                @endif
                <p>
                    {!! $frfData[0]->description !!}
                </p>

            </div>
            @if (count($frfData) > 1)
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Related Topic</h1>
                        </div>
                        <div class="col-md-12">
                            <ul>
                                <?php unset($frfData[0]); ?>
                                    @foreach($frfData as $rNews)
                                        <li>
                                            <a href="{{route('conference',$rNews->slug)}}">{{$rNews->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                </div>
            @endif
        </div>
        @else
        <p>No data available</p>
        @endif
    </div>
@endsection

