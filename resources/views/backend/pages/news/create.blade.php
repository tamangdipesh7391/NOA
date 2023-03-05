@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                Add
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admin-news.store')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Title <a href=""
                                                                        style="color: red;">*{{$errors->first('title')}}</a></label>
                                            <input type="text" name="title" id="title" value="{{old('title')}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug <a href=""
                                                                      style="color: red;">{{$errors->first('slug')}}</a></label>
                                            <input type="text" name="slug" id="slug"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="meta_keywords">Meta Title</label> <br>
                                            <input type="text" name="meta_title"
                                                   value="{{old('meta_title')}}" class="form-control"
                                                   id="meta_keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <br>
                                            <textarea name="meta_description" id="meta_description"
                                                      style="resize: none;"
                                                      class="form-control"
                                                      rows="4">{{old('meta_description')}}</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="status"> Status:
                                                        <a style="color: red;">{{$errors->first('status')}}</a>
                                                    </label>
                                                    <select name="status" id="status"
                                                            class="form-control">
                                                        <option
                                                            value="1" {{ old('status') == '1' ? 'selected' : '' }}>
                                                            Public
                                                        </option>
                                                        <option
                                                            value="0" {{ old('status') == '0' ? 'selected' : '' }}>
                                                            Draft
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="link">Link <a href=""
                                                                              style="color: red;">{{$errors->first('link')}}</a></label>
                                                    <input type="text" name="link" id="link"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <img src="{{url('icons/ui.png')}}"
                                                 id="image_show" alt=""
                                                 style="width: 90%;height: 200px;margin-top: 25px;">
                                            <div class="choose_file">
                                                <span><i class="fa fa-upload"></i> Upload Image</span>
                                                <input name="image" type="file" id="change_image">
                                            </div>
                                            <a style="color: red;">{{$errors->first('image')}}</a>
                                        </div>
                                        <div class="form-group">
                                            <label for="date"> Date: <a href=""
                                                                        style="color: red;">{{$errors->first('date')}}</a></label>
                                            <input type="date" name="date" class="form-control"
                                                   value="{{old('date')}}" id="date">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description_id">Details</label>
                                    <br>
                                    <textarea name="description" id="description_id"
                                              class="form-control">{{old('description')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i
                                            class="fa fa-plus"></i> Add New
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




