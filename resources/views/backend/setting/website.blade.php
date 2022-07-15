@extends('admin.admin_master')
@section('admin')
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 100px;
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update Website Setting</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.websetting', $websitesetting->id) }}" enctype="multipart/form-data">
                            @csrf
                            {{--<div class="col-12">

                                <div class="col-6 form-group pull-left">
                                        <span class="float-label">
                                            <input type="file" name="logo" class="form-control-file" id="logo">
                                            <label class="form-label" for="logo">Website Logo Upload</label>
                                        </span>
                                </div>
                                <div class="col-6 form-group pull-right">
                                    <label class="form-label">Old Logo</label>
                                    <img src="" alt="" style="width: 70px; height: 50px">
                                    <input type="hidden" name="oldlogo">
                                </div>

                            </div>--}}


                            <div class="col-12">
                                <label class="form-label" for="address_en" style="color: #2794EA">Address English</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="address_en" rows="5" cols="30" name="address_en">{{ $websitesetting->address_en }}</textarea>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="address_tr" style="color: #2794EA">Address Turkish</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="address_tr" rows="5" cols="30" name="address_tr">{{ $websitesetting->address_tr }}</textarea>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="address_ru" style="color: #2794EA">Address Russian</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="address_ru" rows="5" cols="30" name="address_ru">{{ $websitesetting->address_ru }}</textarea>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="phone" class="form-control form-control-lg" id="phone" value="{{ $websitesetting->phone }}">
                                  <label class="form-label" for="phone">Phone</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="email" class="form-control form-control-lg" id="email" value="{{ $websitesetting->email }}">
                                  <label class="form-label" for="email">Email</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="about_en" style="color: #2794EA">About Us English</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="about_en" rows="5" cols="30" name="about_en">{{ $websitesetting->about_en }}</textarea>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="about_tr" style="color: #2794EA">About Us Turkish</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="about_tr" rows="5" cols="30" name="about_tr">{{ $websitesetting->about_tr }}</textarea>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="about_ru" style="color: #2794EA">About Us Russian</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="about_ru" rows="5" cols="30" name="about_ru">{{ $websitesetting->about_ru }}</textarea>
                                </span>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#address_en'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#address_tr'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#address_ru'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#about_en'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#about_tr'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#about_ru'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
