@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                <i class="fa fa-edit"></i>
                                Update Banner
                                <a href="{{route('admin-banner.index')}}" class="btn btn-info pull-right">
                                    <i class="fa fa-hand-o-right"></i> Goto Index</a>
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admin-banner.update',$bannerData->id)}}"
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group mb-3">
                                            <label for="title">Title:
                                                <a href="" style="color: red;">{{$errors->first('title')}}
                                                </a></label>
                                            <input type="text" name="title" id="title"
                                                   value="{{$bannerData->title}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="slug">Slug <a href=""
                                                                      style="color: red;">{{$errors->first('slug')}}</a></label>
                                            <input type="text" name="slug" id="slug"
                                                   value="{{$bannerData->slug}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="link">Link <a href=""
                                                                      style="color: red;">{{$errors->first('link')}}</a></label>
                                            <input type="text" name="link" id="link"
                                                   value="{{$bannerData->link}}"
                                                   class="form-control">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="status"> Status:
                                                        <a style="color: red;">{{$errors->first('status')}}</a>
                                                    </label>
                                                    <select name="status" id="status"
                                                            class="form-control">
                                                        <option
                                                            value="1" {{ $bannerData->status == '1' ? 'selected' : '' }}>
                                                            Public
                                                        </option>
                                                        <option
                                                            value="0" {{$bannerData->status == '0' ? 'selected' : '' }}>
                                                            Draft
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="order">Order</label>
                                                    <input type="number" name="order" value="{{$bannerData->order}}"
                                                    class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            @if($bannerData->image)
                                                <img src="{{url($bannerData->image)}}"
                                                     id="image_show" alt="{{$bannerData->title}}"
                                                     class="img-fluid" style="margin-top: 23px;height: 200px;">
                                            @else
                                                <img src="{{url('icons/ui.png')}}"
                                                     class="img-fluid" id="image_show" alt="{{$bannerData->title}}"
                                                     style="margin-top: 23px;height: 200px;">
                                            @endif

                                            <div class="choose_file">
                                                <span><i class="fa fa-upload"></i> Change Image</span>
                                                <input name="image" type="file" id="change_image">
                                            </div>
                                            <a style="color: red;">{{$errors->first('image')}}</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description_id">Details</label>
                                    <textarea name="description" id="description_id"
                                              class="form-control">
                                                    {{$bannerData->description}}
                                                </textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-success"><i
                                            class="fa fa-edit"></i> Update Banner
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

@section('scripts')
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('summary', {
                filebrowserUploadUrl: ckeditorUploadUrl,
                filebrowserUploadMethod: 'form'
            });
            CKEDITOR.replace('description', {
                filebrowserUploadUrl: ckeditorUploadUrl,
                filebrowserUploadMethod: 'form'
            });

        });
    </script>
@endsection




