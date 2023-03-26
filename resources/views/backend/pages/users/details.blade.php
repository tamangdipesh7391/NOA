@extends('backend.master.main')
@section('content')
    {{--    <main id="main" class="main">--}}
    {{--        <section class="section dashboard">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-body">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-md-12 mt-4 mb-3">--}}
    {{--                            <h1>--}}
    {{--                                Member Details--}}
    {{--                            </h1>--}}
    {{--                            <hr>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-md-12">--}}
    {{--                            @include('backend.layouts.message')--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-4">--}}
    {{--                                <table>--}}
    {{--                                    <tr>--}}
    {{--                                        <th>Name:</th>--}}
    {{--                                        <td>--}}
    {{--                                            {{$userData->name}}--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th>Email:</th>--}}
    {{--                                        <td>--}}
    {{--                                            {{$userData->username}}--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th>Gender:</th>--}}
    {{--                                        <td>--}}
    {{--                                            {{$userData->gender}}--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th>DOB:</th>--}}
    {{--                                        <td>--}}
    {{--                                            {{$userData->dob}}--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th>Phone:</th>--}}
    {{--                                        <td>--}}
    {{--                                            {{$userData->phone}}--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th>Status:</th>--}}
    {{--                                        <td>--}}
    {{--                                            {{$userData->status}}--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                </table>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-4">--}}
    {{--                                <table>--}}
    {{--                                    <tr>--}}
    {{--                                        <th>Member Types:</th>--}}
    {{--                                        <td>--}}
    {{--                                            {{$userData->memberType->type}}--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th>Account Status:</th>--}}
    {{--                                        <td>--}}
    {{--                                            {{$userData->account_status}}--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}

    {{--                                </table>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-4">--}}
    {{--                                @if($userData->image)--}}
    {{--                                    <img src="{{asset('uploads/users/'.$userData->image)}}" alt=""--}}
    {{--                                         class="img-fluid">--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <h3>Permanent Address</h3>--}}
    {{--                                <table>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">Country Name:</th>--}}
    {{--                                        <td> {{$userData->userAddress->pCountry->country_name ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">Province:</th>--}}
    {{--                                        <td> {{$userData->userAddress->pProvince->province_name ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">District:</th>--}}
    {{--                                        <td> {{$userData->userAddress->pDistrict->district_name ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">Municipality:</th>--}}
    {{--                                        <td> {{$userData->userAddress->pMuicipality->municipality_name ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">Tole:</th>--}}
    {{--                                        <td> {{$userData->userAddress->permanent_tole ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                </table>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <h3>Temporary Address</h3>--}}
    {{--                                <table>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">Country Name:</th>--}}
    {{--                                        <td> {{$userData->userAddress->tCountry->country_name ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">Province:</th>--}}
    {{--                                        <td> {{$userData->userAddress->tProvince->province_name ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">District:</th>--}}
    {{--                                        <td> {{$userData->userAddress->tDistrict->district_name ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">Municipality:</th>--}}
    {{--                                        <td> {{$userData->userAddress->tMuicipality->municipality_name ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                    <tr>--}}
    {{--                                        <th width="120">Tole:</th>--}}
    {{--                                        <td> {{$userData->userAddress->temporary_tole ?? ''}}</td>--}}
    {{--                                    </tr>--}}
    {{--                                </table>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-12">--}}
    {{--                                <h1>Files: </h1>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                @if($userData->front_size)--}}
    {{--                                    <img src="{{url('uploads/users/'.$userData->front_size)}}" alt=""--}}
    {{--                                         class="img-fluid">--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                @if($userData->back_size)--}}
    {{--                                    <img src="{{url('uploads/users/'.$userData->back_size)}}" alt=""--}}
    {{--                                         class="img-fluid">--}}
    {{--                                @endif--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    {{--    </main>--}}


    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <div>

                            </div>

                            @if($userData->profile->image)
                                <img src="{{url($userData->profile->image)}}" alt="Profile"
                                     class="rounded-circle">
                            @endif
                            <h2>{{$userData->name}}</h2>
                            <h3>Web Designer</h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Overview
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#profile-edit">Address
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">
                                        Documents
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#profile-change-password">Change Password
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#payment-voucher">Voucher
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{$userData->name}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{$userData->email}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Gender</div>
                                        <div class="col-lg-9 col-md-8">{{$userData->gender}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{$userData->phone}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                                        <div class="col-lg-9 col-md-8">{{$userData->date_of_birth}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Member Types</div>
                                        <div class="col-lg-9 col-md-8">{{$userData->memberType->type}}</div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <h5 class="card-title">Permanent Address</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country Name:</div>
                                        <div class="col-lg-9 col-md-8">
                                            {{$userData->userAddress->pCountry->country_name ?? ''}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Province:</div>
                                        <div
                                            class="col-lg-9 col-md-8"> {{$userData->userAddress->pProvince->province_name ?? ''}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">District:</div>
                                        <div
                                            class="col-lg-9 col-md-8"> {{$userData->userAddress->pDistrict->district_name ?? ''}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Municipality:</div>
                                        <div class="col-lg-9 col-md-8">
                                            {{$userData->userAddress->pMuicipality->municipality_name ?? ''}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Tole:</div>
                                        <div
                                            class="col-lg-9 col-md-8"> {{$userData->userAddress->permanent_tole ?? ''}}</div>
                                    </div>
                                    <h5 class="card-title">Temporary Address</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country Name:</div>
                                        <div
                                            class="col-lg-9 col-md-8"> {{$userData->userAddress->tCountry->country_name ?? ''}} </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Province:</div>
                                        <div
                                            class="col-lg-9 col-md-8"> {{$userData->userAddress->tProvince->province_name ?? ''}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">District:</div>
                                        <div
                                            class="col-lg-9 col-md-8"> {{$userData->userAddress->tDistrict->district_name ?? ''}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Municipality:</div>
                                        <div
                                            class="col-lg-9 col-md-8"> {{$userData->userAddress->tMuicipality->municipality_name ?? ''}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Tole:</div>
                                        <div
                                            class="col-lg-9 col-md-8"> {{$userData->userAddress->temporary_tole ?? ''}}</div>
                                    </div>


                                </div>

                                <div class="tab-pane fade pt-3" id="profile-settings">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3>Frontend</h3>
                                            @if($userData->profile->front_size)
                                                <img src="{{url($userData->profile->front_size)}}" alt="Profile"
                                                     class="img-fluid">
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <h3>Backend</h3>
                                            @if($userData->profile->back_size)
                                                <img src="{{url($userData->profile->back_size)}}" alt="Profile"
                                                     class="img-fluid">
                                            @endif
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-12 mt-5">
                                            <h3>Citizenship Number: {{$userData->profile->citizenship_no ?? ''}}</h3>
                                            <h3>Qualification: {{$userData->profile->qualification ?? ''}}</h3>
                                            <h3>Year of graduation: {{$userData->profile->year_of_graduation ?? ''}}</h3>
                                            <h3>University: {{$userData->profile->university ?? ''}}</h3>
                                            <h3>Date of registration: {{$userData->profile->date_of_registration ?? ''}}</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                       id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                       id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                       id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="payment-voucher">
                                    <!-- Change Password Form -->
                                    <form method="post" action="{{route('voucher-status')}}">
                                        @csrf
                                        <input hidden name="id" value="{{$userData->id}}">
                                        <div class=" mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Voucher Status</label>
                                            <select name="voucher_status" id="" class="form-control">
                                                <option value="pending" <?php
                                                if ($userData->voucher_status == 'pending')
                                                    echo 'selected';
                                                ?>
                                                >Pending</option>
                                                <option value="approved" <?php
                                                if ($userData->voucher_status == 'approved')
                                                    echo 'selected';
                                                ?>
                                                >Approved</option>
                                                <option value="rejected" <?php
                                                if ($userData->voucher_status == 'rejected')
                                                    echo 'selected';
                                                ?>
                                                >Rejected</option>
                                            </select>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change voucher status</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>
                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
