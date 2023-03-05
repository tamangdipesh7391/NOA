@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                <i class="bi bi-bag-plus-fill"></i>
                                Update District
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>

                        <div class="col-md-12">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="province_id">Province Name:
                                        <a style="color: red;">{{$errors->first('province_id')}}</a>
                                    </label>
                                    <select name="province_id" id="province_id" class="form-control">
                                        <option value="{{$districtData->province->id}}" selected readonly>
                                            {{$districtData->province->province_name}}
                                        </option>
                                        @foreach($provinceData as $province)
                                            <option value="{{$province->id}}">
                                                {{$province->province_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="district_name">District name:
                                        <a style="color: red;">{{$errors->first('district_name')}}</a>
                                    </label>
                                    <input type="text" name="district_name"
                                           value="{{$districtData->district_name}}"
                                           id="district_name"
                                           class="form-control">
                                </div>
                                <div class="form group">
                                    <button class="btn btn-success">
                                        <i class="fa fa-plus"></i> Update District
                                    </button>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{route('manage-district',$districtData->province->id)}}"
                               class="btn btn-primary">
                                <i class="fa fa-hand-o-right"></i> Goto District List Page</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


