@extends('frontend.master.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1>Awards Details</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <h1>{{$awardsData->title}}</h1>
                <div class="row">
                    <div class="col-md-8">
                        @if ($awardsData->slug == "apply-for-travel-grant")
                        <form action="{{route('apply-for-travel-grant')}}" method="post">
                            @csrf
                            <div class="form-group">
                                @if ($errors->has('reason'))
                                    <span class="text-danger">{{ $errors->first('reason') }}</span>
                                @endif
                                <input type="text" class="form-control mt-2 mb-3" id="reason" name="reason" placeholder="Reason for traveling">
                            </div>
                            <div class="form-group">
                                @if ($errors->has('date'))
                                    <span class="text-danger">{{ $errors->first('date') }}</span>
                                @endif
                                <input type="date" class="form-control mb-3" id="date" name="date" placeholder="Date of the conference or event">
                            </div>
                            <div class="form-group">
                                @if ($errors->has('venue'))
                                    <span class="text-danger">{{ $errors->first('venue') }}</span>
                                @endif
                                <input type="text" class="form-control mb-3" id="venue" name="venue" placeholder="Venue of the conference or event">
                            </div>
                            <div class="form-group">
                                @if ($errors->has('expected_grant'))
                                    <span class="text-danger">{{ $errors->first('expected_grant') }}</span>
                                @endif
                                <input type="text" class="form-control mb-3" id="expected_grant" name="expected_grant" placeholder="Expected grant">
                            </div>
                            <div class="form-group">
                                @if ($errors->has('membership_number'))
                                    <span class="text-danger">{{ $errors->first('membership_number') }}</span>
                                @endif
                                <input type="membership_number" class="form-control mb-3" id="membership_number" name="membership_number" placeholder="Enter membership number">
                            </div>
                            <div class="form-group">
                                @if ($errors->has('grant_status'))
                                    <span class="text-danger">{{ $errors->first('grant_status') }}</span>
                                @endif
                                <select name="grant_status" id="grant_status" class="form-control mb-3">
                                    <option selected disabled>Have you received grant previously or applied for grant elsewhere?</option>
                                    <option value="received_previously">Received previously</option>
                                    <option value="apply_for_elsewhere">Applied for grant elsewhere</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-info" type="submit">Submit</button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
                @if($awardsData->image)
                    <img src="{{url($awardsData->image)}}" class="card-img-top" alt="...">
                @endif
                <p>
                    {!! $awardsData->description !!}
                </p>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Related Awards</h3>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            @foreach($relatedAwards as $award)
                                <li>
                                    <a href="{{route('awards',$award->slug)}}">{{$award->title}}</a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

