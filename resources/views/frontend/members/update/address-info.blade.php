@extends('frontend.members.layouts')

@section('member-content')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-edit"></i> Update info</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('backend.layouts.message')
                                </div>
                                <div class="col-md-12">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Permanent address</h4>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <label for="permanent_country">Country:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('permanent_country')}}</a>
                                                    </label>
                                                    <select name="permanent_country"
                                                            id="permanent_country"
                                                            class="form-control">
                                                        <option value="{{$userData->userAddress->pCountry->id ?? ''}}"
                                                                selected
                                                                readonly>{{$userData->userAddress->pCountry->country_name ?? ''}}</option>
                                                        @foreach($countryData as $country)
                                                            <option
                                                                value="{{$country->id}}"
                                                                {{old('permanent_country')==$country->id ? 'selected':'' }}>
                                                                {{$country->country_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <label for="permanent_province">Province:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('permanent_province')}}</a>

                                                    </label>
                                                    <select name="permanent_province"
                                                            id="permanent_province"
                                                            class="form-control">
                                                        <option value="{{$userData->userAddress->pProvince->id ?? ''}}">
                                                            {{$userData->userAddress->pProvince->province_name ?? ''}}
                                                        </option>
                                                        @foreach($provinceData as $province)
                                                            <option
                                                                value="{{$province->id}}"
                                                                {{old('permanent_province')==$province->id ? 'selected':'' }}>
                                                                {{$province->province_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="permanent_district">District:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('permanent_district')}}</a>
                                                    </label>
                                                    <select name="permanent_district"
                                                            id="permanent_district"
                                                            class="form-control">
                                                        <option
                                                            value="{{$userData->userAddress->pDistrict->id ?? ''}}">{{$userData->userAddress->pDistrict->district_name ?? ''}}</option>
                                                        @foreach($districtData as $district)
                                                            <option
                                                                value="{{$district->id}}"
                                                                {{old('permanent_district')==$district->id ? 'selected':'' }}>
                                                                {{$district->district_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label for="permanent_municipality">Municipality:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('permanent_municipality')}}</a>
                                                    </label>
                                                    <select name="permanent_municipality"
                                                            id="permanent_municipality"
                                                            class="form-control">
                                                        <option
                                                            value="{{$userData->userAddress->pMuicipality->id ?? ''}}">{{$userData->userAddress->pMuicipality->municipality_name ?? ''}}</option>
                                                        @foreach($munData as $mun)
                                                            <option
                                                                value="{{$mun->id}}"
                                                                {{old('permanent_municipality')==$mun->id ? 'selected':'' }}>
                                                                {{$mun->municipality_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label for="permanent_tole">Tole (Optional)</label>
                                                    <input type="text" name="permanent_tole"
                                                           id="permanent_tole"
                                                           value="{{$userData->userAddress->permanent_tole ?? ''}}"
                                                           class="form-control">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Temporary Address</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="field">
                                                    <label for="temporary_country">Country:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('temporary_country')}}</a>

                                                    </label>
                                                    <select name="temporary_country" id="temporary_country"
                                                            class="form-control">
                                                        <option value="{{$userData->userAddress->tCountry->id ?? ''}}">
                                                            {{$userData->userAddress->tCountry->country_name ?? ''}}
                                                        </option>
                                                        @foreach($countryData as $country)
                                                            <option
                                                                value="{{$country->id}}"
                                                                {{old('temporary_country')==$country->id ? 'selected':'' }}>
                                                                {{$country->country_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="temporary_province">Province:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('temporary_province')}}</a>
                                                    </label>
                                                    <select name="temporary_province" id="temporary_province"
                                                            class="form-control">
                                                        <option value="{{$userData->userAddress->tProvince->id ?? ''}}">
                                                            {{$userData->userAddress->tProvince->province_name ?? ''}}
                                                        </option>
                                                        @foreach($provinceData as $province)
                                                            <option
                                                                value="{{$province->id}}"
                                                                {{old('temporary_province')==$province->id ? 'selected':'' }}>
                                                                {{$province->province_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="temporary_district">District:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('temporary_district')}}</a>
                                                    </label>
                                                    <select name="temporary_district" id="temporary_district"
                                                            class="form-control">
                                                        <option value="{{$userData->userAddress->tDistrict->id ?? ''}}">
                                                            {{$userData->userAddress->tDistrict->district_name ?? ''}}
                                                        </option>
                                                        @foreach($districtData as $district)
                                                            <option
                                                                value="{{$district->id}}"
                                                                {{old('temporary_district')==$district->id ? 'selected':'' }}>
                                                                {{$district->district_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="temporary_municipality">Municipality:
                                                        <a style="color: red;text-decoration: none;">* {{$errors->first('temporary_municipality')}}</a>
                                                    </label>
                                                    <select name="temporary_municipality"
                                                            id="temporary_municipality"
                                                            class="form-control">
                                                        <option value="{{$userData->userAddress->tMuicipality->id ?? ''}}">
                                                            {{$userData->userAddress->tMuicipality->municipality_name ??''}}
                                                        </option>
                                                        @foreach($munData as $mun)
                                                            <option
                                                                value="{{$mun->id}}"
                                                                {{old('temporary_municipality')==$mun->id ? 'selected':'' }}>
                                                                {{$mun->municipality_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="temporary_tole">Tole (Optional)</label>
                                                    <input type="text" name="temporary_tole"
                                                           value="{{$userData->userAddress->temporary_tole ?? ''}}"
                                                           id="temporary_tole" class="form-control">

                                                </div>
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-success">
                                                    <i class="fa fa-plus" aria-hidden="true"></i> Update Address
                                                </button>
                                            </div>
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
