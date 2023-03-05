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
                                Update Province
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
                                    <label for="country_id">Country Name:
                                        <a style="color: red;">{{$errors->first('country_id')}}</a>
                                    </label>
                                    <select name="country_id" id="country_id" class="form-control">
                                        <option value="{{$provinceData->country->id}}" selected readonly>
                                            {{$provinceData->country->country_name}}
                                        </option>
                                        @foreach($countryData as $country)
                                            <option value="{{$country->id}}">
                                                {{$country->country_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="province_name">Province name:
                                        <a style="color: red;">{{$errors->first('province_name')}}</a>
                                    </label>
                                    <input type="text" name="province_name"
                                           value="{{$provinceData->province_name}}"
                                           id="province_name"
                                           class="form-control">
                                </div>
                                <div class="form group">
                                    <button class="btn btn-success">
                                        <i class="fa fa-plus"></i> Update Province
                                    </button>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{route('manage-province',$provinceData->country->id)}}"
                               class="btn btn-primary">
                                <i class="fa fa-hand-o-right"></i> Goto Province List Page</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection


