@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                update
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admin-content.update',$contentData->id)}}"
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="content_type_id">Content Types
                                                <a href="" style="color: red;text-decoration: none">*
                                                    {{$errors->first('content_type_id')}}</a>
                                            </label>
                                            <select name="content_type_id" id="content_type_id"
                                                    class="form-control">
                                                <option value="{{$contentData->getContentType->id}}" readonly>
                                                    {{$contentData->getContentType->title}}
                                                </option>
                                                @foreach($contentTypeData as $content_type)
                                                    <option value="{{$content_type->id}}"
                                                        {{old('content_type_id') == $content_type->id ? 'selected' : ''}}>
                                                        {{$content_type->title}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Title: <a href=""
                                                                         style="color: red;">{{$errors->first('title')}}</a></label>
                                            <input type="text" name="title" id="title"
                                                   value="{{$contentData->title}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug <a href=""
                                                                      style="color: red;">{{$errors->first('slug')}}</a></label>
                                            <input type="text" name="slug" id="slug"
                                                   value="{{$contentData->slug}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control"
                                                   id="meta_title">{{$contentData->meta_title}}</input>
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea name="meta_description" id="meta_description"
                                                      style="resize: none;" class="form-control"
                                                      rows="4"> {{$contentData->meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status"> Status:
                                                <a style="color: red;">{{$errors->first('status')}}</a>
                                            </label>
                                            <select name="status" id="status"
                                                    class="form-control">
                                                <option
                                                    value="1" {{ $contentData->status == '1' ? 'selected' : '' }}>
                                                    Public
                                                </option>
                                                <option
                                                    value="0" {{$contentData->status == '0' ? 'selected' : '' }}>
                                                    Draft
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($contentData->image)
                                                <img src="{{url($contentData->image)}}"
                                                     id="image_show" alt="{{$contentData->title}}"
                                                     class="img-fluid" style="margin-top: 23px;height: 200px;">
                                            @else
                                                <img src="{{url('icons/ui.png')}}"
                                                     class="img-fluid" id="image_show"
                                                     alt="{{$contentData->title}}"
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
                                    <label for="summary">Intro text
                                        <a style="color: red;">{{$errors->first('intro_text')}}</a>
                                    </label>
                                    <textarea name="intro_text" id="summary"
                                              class="form-control"
                                              rows="4">{{$contentData->intro_text}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description_id">Details</label>
                                    <textarea name="description" id="description_id"
                                              class="form-control">
                                                    {{$contentData->description}}
                                                </textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i
                                            class="fa fa-newspaper-o"></i> Update Content
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

