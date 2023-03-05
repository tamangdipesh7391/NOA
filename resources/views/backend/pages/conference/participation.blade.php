@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                Conference Participation
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($conferenceData->getConferenceForm as $participation)
                            <div class="col-md-4 col-sm-4  profile_details">
                                <div class="well profile_view">
                                    <div class="col-sm-12">
                                        <div class="left col-sm-7">
                                            <h2>{{$participation->name}}</h2>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-envelope"></i> Email:
                                                    {{$participation->email}}
                                                </li>
                                                <li><i class="fa fa-phone"></i> Phone: {{$participation->phone}} </li>
                                            </ul>
                                        </div>
                                        <div class="right col-sm-5 text-center">
                                            @if($participation->image)
                                                <img src="{{url($participation->image)}}" alt=""
                                                     class="img-circle img-fluid">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
