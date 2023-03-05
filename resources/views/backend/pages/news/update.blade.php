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
                            <form action="{{route('admin-news.update',$newsData->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="date">News Date
                                                        <a href=""
                                                           style="color: red;">{{$errors->first('date')}}</a>
                                                    </label>
                                                    <input type="date" name="date"
                                                           class="form-control form-control-sm"
                                                           value="{{$newsData->date}}" id="date">
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="status"> Status:
                                                        <a style="color: red;">{{$errors->first('status')}}</a>
                                                    </label>
                                                    <select name="status" id="status"
                                                            class="form-control">
                                                        <option value="" selected readonly>--- Select Status
                                                            ---
                                                        </option>
                                                        <option
                                                            value="1" {{ $newsData->status == '1' ? 'selected' : '' }}>
                                                            Public
                                                        </option>
                                                        <option
                                                            value="0" {{$newsData->status == '0' ? 'selected' : '' }}>
                                                            Draft
                                                        </option>

                                                    </select>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Title: <a href=""
                                                                         style="color: red;">{{$errors->first('title')}}</a></label>
                                            <input type="text" name="title" id="title"
                                                   value="{{$newsData->title}}"
                                                   class="form-control form-control-sm">

                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug <a href=""
                                                                      style="color: red;">{{$errors->first('slug')}}</a></label>
                                            <input type="text" name="slug" id="slug"
                                                   value="{{$newsData->slug}}"
                                                   class="form-control form-control-sm">

                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        @if($newsData->image)
                                            <img src="{{url($newsData->image)}}"
                                                 id="image_show" style="width: 90%;height: 150px;" alt="">
                                        @else
                                            <img src="{{url('backend/icons/uploadimage.png')}}"
                                                 id="image_show" alt=""
                                                 style="width: 90%;height: 150px;">
                                        @endif

                                        <div class="choose_file">
                                            <span><i class="fa fa-upload"></i> Upload Image</span>
                                            <input name="image" type="file" id="change_image">
                                        </div>
                                        <a style="color: red;">{{$errors->first('image')}}</a>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label> <br>
                                    <input type="text" name="meta_title" value="{{$newsData->meta_title}}"
                                           class="form-control" id="meta_title">
                                </div>


                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description"
                                              style="resize: none;" class="form-control"
                                              rows="4"> {{$newsData->meta_description}}</textarea>
                                </div>


                                <div class="form-group">
                                    <label for="description">Details</label>
                                    <br>
                                    <textarea name="description" id="description"
                                              class="form-control">
                                                    {{$newsData->description}}
                                                </textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn-sm btn-success"><i
                                            class="fa fa-newspaper-o"></i> Update News
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



