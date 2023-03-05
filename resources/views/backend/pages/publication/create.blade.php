@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-2">
                            <h1>
                                <i class="bi bi-bag-plus-fill"></i>
                                Add Publication
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admin-publication.store')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">
                                            <label for="title">Title <a href=""
                                                                        style="color: red;">*{{$errors->first('title')}}</a></label>
                                            <input type="text" name="title" id="title" value="{{old('title')}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="slug">Slug <a href=""
                                                                      style="color: red;">{{$errors->first('slug')}}</a></label>
                                            <input type="text" name="slug" id="slug"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="meta_title">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control"
                                                   value="{{old('meta_title')}}" id="meta_title">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="meta_description">Meta Description</label>
                                            <br>
                                            <textarea name="meta_description" id="meta_description"
                                                      style="resize: none;"
                                                      class="form-control"
                                                      rows="4">{{old('meta_description')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="type"> Type:
                                                <a style="color: red;">{{$errors->first('type')}}</a>
                                            </label>
                                            <select name="type" id="status"
                                                    class="form-control">
                                                <option
                                                    value="normal" {{ old('type') == 'normal' ? 'selected' : '' }}>
                                                    Normal
                                                </option>
                                                <option
                                                    value="advanced" {{ old('type') == 'advanced' ? 'selected' : '' }}>
                                                    Advanced
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-2">
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
                                        <div class="form-group mb-2 mb-2">
                                            <label for="menu"> Menu:
                                                <a style="color: red;">{{$errors->first('menu')}}</a>
                                            </label>
                                            <select name="menu_id" id="menu"
                                                    class="form-control">
                                                <option value="" selected readonly>Select Menu</option>
                                                @foreach($menuData as $key=>$menu)
                                                    <option
                                                        value="{{$menu->id}}" {{ old('menu_id') == $menu->id ? 'selected' : '' }}>
                                                        {{$menu->name}}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="image">Image Upload</label> <br>
                                            <input name="image" type="file" id="image" class="form-control">
                                            <a style="color: red;">{{$errors->first('image')}}</a>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="file">File uploads</label> <br>
                                            <input type="file" name="files[]" class="form-control" multiple>
                                            <br>
                                            <a style="color: black;text-decoration: none;">
                                                Upload Multiple files</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group mb-2">
                                    <label for="summary">Intro text
                                        <a style="color: red;">{{$errors->first('intro_text')}}</a>
                                    </label>
                                    <textarea name="intro_text" id="summary"
                                              class="form-control"
                                              rows="4">{{old('intro_text')}}</textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="description_id">Details</label>
                                    <br>
                                    <textarea name="description" id="description_id"
                                              class="form-control">{{old('description')}}</textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-bag-plus-fill"></i> Add Publication
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

