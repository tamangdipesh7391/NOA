@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                Update
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admin-content-type.update',$contentTypeData->id)}}"
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Title:
                                                <a href="" style="color: red;">{{$errors->first('title')}}
                                                </a></label>
                                            <input type="text" name="title" id="title"
                                                   value="{{$contentTypeData->title}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug <a href=""
                                                                      style="color: red;">{{$errors->first('slug')}}</a></label>
                                            <input type="text" name="slug" id="slug"
                                                   value="{{$contentTypeData->slug}}"
                                                   class="form-control">

                                        </div>

                                        <div class="form-group">
                                            <label for="status"> Status:
                                                <a style="color: red;">{{$errors->first('status')}}</a>
                                            </label>
                                            <select name="status" id="status"
                                                    class="form-control">
                                                <option
                                                    value="1" {{ $contentTypeData->status == '1' ? 'selected' : '' }}>
                                                    Public
                                                </option>
                                                <option
                                                    value="0" {{$contentTypeData->status == '0' ? 'selected' : '' }}>
                                                    Draft
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            @if($contentTypeData->image)
                                                <img src="{{url($contentTypeData->image)}}"
                                                     id="image_show" alt="{{$contentTypeData->title}}"
                                                     class="img-fluid" style="margin-top: 23px;height: 200px;">
                                            @else
                                                <img src="{{url('icons/ui.png')}}"
                                                     class="img-fluid" id="image_show"
                                                     alt="{{$contentTypeData->title}}"
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

                                <div class="form-group">
                                    <label for="description_id">Details</label>
                                    <textarea name="description" id="description_id"
                                              class="form-control">
                                                    {{$contentTypeData->description}}
                                                </textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i
                                            class="fa fa-newspaper-o"></i> Content Types Update
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




