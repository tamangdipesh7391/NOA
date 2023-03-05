@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-1">
                            <h1>
                                <i class="bi bi-bag-plus-fill"></i>
                                Update Setting
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('backend.layouts.message')
                        </div>
                        <div class="col-md-12">
                            <form action="{{route('setting.update',$settingData->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @method("PATCH")
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name"> name
                                                <a style="color: red;">{{$errors->first('name')}}</a></label>
                                            <input type="text" name="name" id="name"
                                                   value="{{$settingData->name}}"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="email"> Email</label>
                                            <input type="text" name="email" id="email"
                                                   value="{{$settingData->email}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="address"> Address</label>
                                            <input type="text" name="address"
                                                   id="address"
                                                   value="{{$settingData->address}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_title"> Meta Title</label> <br>
                                            <input type="text" name="meta_title" id="meta_title"
                                                   value="{{$settingData->meta_title}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea name="meta_description"
                                                      id="meta_description"
                                                      rows="4" style="resize: none;"
                                                      class="form-control">{{$settingData->meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phone"> Phone</label>
                                            <input type="text" name="phone" id="phone"
                                                   value="{{$settingData->phone}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile"> Mobile </label>
                                            <input type="text" name="mobile" id="mobile"
                                                   value="{{$settingData->mobile}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="fax"> Fax </label>
                                            <input type="text" name="fax" id="fax"
                                                   value="{{$settingData->fax}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_box">Post Box </label>
                                            <input type="text" name="post_box"
                                                   id="post_box"
                                                   value="{{$settingData->post_box}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="logo">Logo</label> <br>
                                            <input name="image" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label for="keywords"> keywords</label> <br>
                                            <input type="text" name="meta_keywords" id="keywords"
                                                   value="{{$settingData->meta_keywords}}"
                                                   data-role="tagsinput" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description"> Description</label>
                                    <textarea name="description"
                                              id="description"
                                              class="form-control">{{$settingData->description}}</textarea>
                                </div>


                                <div class="form-group">
                                    <button class="btn-sm btn-success">
                                        <i class="fa fa-plus"></i> Update Setting
                                    </button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection




