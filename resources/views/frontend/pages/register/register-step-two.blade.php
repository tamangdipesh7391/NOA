@extends('frontend.master.master')
@section('content')
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="is-size-1">Register New Account</h1>
            </div>
        </div>
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Permanent address</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="permanent_country">Country:
                                                <a style="color: red;text-decoration: none;">* {{$errors->first('permanent_country')}}</a>
                                            </label>
                                            <select name="permanent_country" id="permanent_country"
                                                    class="form-control">
                                                <option value="" selected readonly>Select Country</option>
                                                @foreach($countryData as $country)
                                                    <option
                                                        value="{{$country->id}}"
                                                        {{$addressData->permanent_country ?? old('permanent_country')==$country->id ? 'selected':'' }}>
                                                        {{$country->country_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="permanent_province">Province:
                                                <a style="color: red;text-decoration: none;">* {{$errors->first('permanent_province')}}</a>

                                            </label>
                                            <select name="permanent_province" id="permanent_province"
                                                    class="form-control">
                                                <option value="" selected readonly>Select Province

                                                </option>
                                                @foreach($provinceData as $province)
                                                    <option
                                                        value="{{$province->id}}"
                                                        {{$province->id==$addressData->permanent_province ?? old('permanent_province')==$province->id ? 'selected':'' }}>
                                                        {{$province->province_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="permanent_district">District:
                                                <a style="color: red;text-decoration: none;">* {{$errors->first('permanent_district')}}</a>
                                            </label>
                                            <select name="permanent_district" id="permanent_district"
                                                    class="form-control">
                                                <option value="" selected readonly>Select District</option>
                                                @foreach($districtData as $district)
                                                    <option
                                                        value="{{$district->id}}"
                                                        {{$district->id==$addressData->permanent_district ?? old('permanent_district')==$district->id ? 'selected':'' }}>
                                                        {{$district->district_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="permanent_municipality">Municipality:
                                                <a style="color: red;text-decoration: none;">* {{$errors->first('permanent_municipality')}}</a>
                                            </label>
                                            <select name="permanent_municipality" id="permanent_municipality"
                                                    class="form-control">
                                                <option value="" selected readonly>Select Municipality</option>
                                                @foreach($munData as $mun)
                                                    <option
                                                        value="{{$mun->id}}"
                                                        {{$mun->id==$addressData->permanent_municipality ?? old('permanent_municipality')==$mun->id ? 'selected':'' }}>
                                                        {{$mun->municipality_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label for="permanent_tole">Tole (Optional)</label>
                                            <input type="text" name="permanent_tole" id="permanent_tole"
                                                   value="{{$addressData->permanent_tole ?? old('permanent_tole')}}"
                                                   class="form-control">
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> Temporary Address</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="checkbox" id="same" name="save" value="same">
                                            <label for="same">Same as permanent address </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="temporary_country">Country:
                                                <a style="color: red;text-decoration: none;">* {{$errors->first('temporary_country')}}</a>

                                            </label>
                                            <select name="temporary_country" id="temporary_country"
                                                    class="form-control">
                                                <option value="" selected readonly>Select Country</option>
                                                @foreach($countryData as $country)
                                                    <option
                                                        value="{{$country->id}}"
                                                        {{$country->id==$addressData->temporary_country ?? old('temporary_country')==$country->id ? 'selected':'' }}>
                                                        {{$country->country_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="temporary_province">Province:
                                                <a style="color: red;text-decoration: none;">* {{$errors->first('temporary_province')}}</a>
                                            </label>
                                            <select name="temporary_province" id="temporary_province"
                                                    class="form-control">
                                                <option value="" selected readonly>Select Province</option>
                                                @foreach($provinceData as $province)
                                                    <option
                                                        value="{{$province->id}}"
                                                        {{$province->id==$addressData->temporary_province ?? old('temporary_province')==$province->id ? 'selected':'' }}>
                                                        {{$province->province_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="temporary_district">District:
                                                <a style="color: red;text-decoration: none;">* {{$errors->first('temporary_district')}}</a>
                                            </label>
                                            <select name="temporary_district" id="temporary_district"
                                                    class="form-control">
                                                <option value="" selected readonly>Select District</option>
                                                @foreach($districtData as $district)
                                                    <option
                                                        value="{{$district->id}}"
                                                        {{$addressData->temporary_district==$district->id ?? old('temporary_district')==$district->id ? 'selected':'' }}>
                                                        {{$district->district_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="temporary_municipality">Municipality:
                                                <a style="color: red;text-decoration: none;">* {{$errors->first('temporary_municipality')}}</a>
                                            </label>
                                            <select name="temporary_municipality" id="temporary_municipality"
                                                    class="form-control">
                                                <option value="" selected readonly>Select Municipality</option>
                                                @foreach($munData as $mun)
                                                    <option
                                                        value="{{$mun->id}}"
                                                        {{$mun->id==$addressData->temporary_municipality ?? old('temporary_municipality')==$mun->id ? 'selected':'' }}>
                                                        {{$mun->municipality_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label for="temporary_tole">Tole (Optional)</label>
                                            <input type="text" name="temporary_tole"
                                                   id="temporary_tole"
                                                   value="{{$addressData->temporary_tole ?? old('temporary_tole')}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 mb-4">
                        <a href="{{route('register.step.one')}}" class="btn btn-info">Previous</a>
                        <button class="btn btn-success">Next</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection

