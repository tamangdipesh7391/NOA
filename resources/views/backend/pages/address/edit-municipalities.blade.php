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
                                Update Municipality
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
                                    <label for="district_id">District Name:
                                        <a style="color: red;">{{$errors->first('district_id')}}</a>
                                    </label>
                                    <select name="district_id" id="district_id" class="form-control">
                                        <option value="{{$munData->district->id}}" selected readonly>
                                            {{$munData->district->district_name}}
                                        </option>
                                        @foreach($districtData as $dis)
                                            <option value="{{$dis->id}}">
                                                {{$dis->district_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="municipality_name">Municipality name:
                                        <a style="color: red;">{{$errors->first('municipality_name')}}</a>
                                    </label>
                                    <input type="text" name="municipality_name"
                                           value="{{$munData->municipality_name}}"
                                           id="municipality_name"
                                           class="form-control">
                                </div>
                                <div class="form group">
                                    <button class="btn btn-success">
                                        <i class="fa fa-plus"></i> Update Municipality
                                    </button>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{route('manage-municipalities',$munData->district->id)}}"
                               class="btn btn-primary">
                                <i class="fa fa-hand-o-right"></i> Goto Municipality List Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection


