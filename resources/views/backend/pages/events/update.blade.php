@extends('backend.master.main')
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-2">
                            <h1>
                                <i class="bi bi-pencil-square"></i>   Update Events
                            </h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admin-events.update',$eventsData->id)}}"
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="date">Start Date : <a
                                                    style="color: red;">{{$errors->first('date')}}</a></label>
                                            <input type="text" name="date"
                                                   value="{{$eventsData->date}}"
                                                   id="date"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="end_date">End Date <a
                                                    style="color: red;">{{$errors->first('date')}}</a></label>
                                            <input type="text" name="end_date"
                                                   value="{{$eventsData->end_date}}"
                                                   id="end_date"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <div class="form-group mb-3">
                                            <label for="title">Title:
                                                <a href="" style="color: red;">{{$errors->first('title')}}
                                                </a></label>
                                            <input type="text" name="title" id="title"
                                                   value="{{$eventsData->title}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="slug">Slug <a href=""
                                                                      style="color: red;">{{$errors->first('slug')}}</a></label>
                                            <input type="text" name="slug" id="slug"
                                                   value="{{$eventsData->slug}}"
                                                   class="form-control">

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="meta_title">Meta Title</label>
                                            <textarea name="meta_title" class="form-control"
                                                      id="meta_title">{{$eventsData->meta_title}}</textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea name="meta_description" id="meta_description"
                                                      style="resize: none;" class="form-control"
                                                      rows="4"> {{$eventsData->meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="status"> Status:
                                                <a style="color: red;">{{$errors->first('status')}}</a>
                                            </label>
                                            <select name="status" id="status"
                                                    class="form-control">
                                                <option
                                                    value="1" {{ $eventsData->status == '1' ? 'selected' : '' }}>
                                                    Public
                                                </option>
                                                <option
                                                    value="0" {{$eventsData->status == '0' ? 'selected' : '' }}>
                                                    Draft
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            @if($eventsData->image)
                                                <img src="{{url($eventsData->image)}}"
                                                     id="image_show" alt="{{$eventsData->title}}"
                                                     class="img-fluid" style="margin-top: 23px;height: 200px;">
                                            @else
                                                <img src="{{url('icons/ui.png')}}"
                                                     class="img-fluid" id="image_show" alt="{{$eventsData->title}}"
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
                                    <label for="summary">Intro text
                                        <a style="color: red;">{{$errors->first('intro_text')}}</a>
                                    </label>
                                    <textarea name="intro_text" id="summary"
                                              class="form-control"
                                              rows="4">{{$eventsData->intro_text}}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description_id">Details</label>
                                    <textarea name="description" id="description_id"
                                              class="form-control">
                                                    {{$eventsData->description}}
                                                </textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i>  Update Events
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

