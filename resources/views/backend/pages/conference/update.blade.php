@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-4 mb-2">
                            <h1>
                                Conference Update
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admin-conference.update',$conferenceData->id)}}"
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="date">Start Date:
                                            <a style="color: red;text-decoration: none">
                                                {{$errors->first('start_date')}}
                                            </a>
                                        </label>
                                        <input type="date" name="start_date"
                                               value="{{$conferenceData->date}}"
                                               id="date" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="end_date">End Date:
                                            <a style="color: red;text-decoration: none">
                                                {{$errors->first('end_date')}}
                                            </a>
                                        </label>
                                        <input type="date" name="end_date"
                                               value="{{$conferenceData->end_date}}"
                                               id="end_date" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Title:
                                                <a href="" style="color: red;">{{$errors->first('title')}}
                                                </a></label>
                                            <input type="text" name="title" id="title"
                                                   value="{{$conferenceData->title}}"
                                                   class="form-control form-control-sm">

                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug <a href=""
                                                                      style="color: red;">{{$errors->first('slug')}}</a></label>
                                            <input type="text" name="slug" id="slug"
                                                   value="{{$conferenceData->slug}}"
                                                   class="form-control form-control-sm">

                                        </div>
                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <textarea name="meta_title" class="form-control"
                                                      id="meta_title">{{$conferenceData->meta_title}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea name="meta_description" id="meta_description"
                                                      style="resize: none;" class="form-control"
                                                      rows="4"> {{$conferenceData->meta_description}}</textarea>
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
                                                    value="1" {{ $conferenceData->status == '1' ? 'selected' : '' }}>
                                                    Public
                                                </option>
                                                <option
                                                    value="0" {{$conferenceData->status == '0' ? 'selected' : '' }}>
                                                    Draft
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($conferenceData->image)
                                                <img src="{{url($conferenceData->image)}}"
                                                     id="image_show" alt="{{$conferenceData->title}}"
                                                     class="img-fluid" style="margin-top: 23px;height: 200px;">
                                            @else
                                                <img src="{{url('icons/ui.png')}}"
                                                     class="img-fluid" id="image_show"
                                                     alt="{{$conferenceData->title}}"
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
                                              rows="4">{{$conferenceData->intro_text}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description_id">Details</label>
                                    <textarea name="description" id="description_id"
                                              class="form-control">
                                                    {{$conferenceData->description}}
                                                </textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i
                                            class="fa fa-newspaper-o"></i> Update Conference
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

