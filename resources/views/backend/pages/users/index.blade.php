@extends('backend.master.main')
@section('content')
<script src="{{url('backend-assets/js/jquery.js')}}"></script>

<main id="main" class="main">
    <section class="section dashboard">
        <div class="ac-update-message"></div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mt-4 mb-3">
                        <h1>
                            Member List
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @include('backend.layouts.message')
                    </div>
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S.n</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Member Type</th>
                                    <th>Account Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userData as $key=>$user)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->memberType->type}}</td>
                                    <td>
                                        <input type="hidden" name="user_id" class="user_id{{$key}}" value="{{$user->id}}">
                                        <select name="user_status" class="form-control text-center user_status{{$key}}">
                                            <option value="active" {{ $user->account_status == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="pending" {{ $user->account_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="suspended" {{ $user->account_status == 'suspended' ? 'selected' : '' }}>Suspended</option>
                                            <option value="deleted" {{ $user->account_status == 'deleted' ? 'selected' : '' }}>Deleted</option>

                                        </select>
                                        <script>
                                            var token = "{{ csrf_token() }}";
                                            $(".user_status{{$key}}").change(function() {
                                                var userId = $(".user_id{{$key}}").val();
                                                var status = $(this).val();
                                                console.log(userId);
                                                $.ajax({
                                                    type: "POST",
                                                    url: "{{route('change-user-status')}}",
                                                    data: {
                                                        "_token": token,
                                                        "user_id": userId,
                                                        "status": status
                                                    },
                                                    success: function(response) {
                                                        $(".ac-update-message").html("<div class='alert alert-success'>" + response + "</div>");
                                                    },
                                                });
                                            });
                                        </script>
                                    </td>
                                    <td>
                                        <a href="{{route('register-user-list-details',$user->id)}}" class="btn btn-info btn-sm">Details</a>
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