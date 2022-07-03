@extends('admin.admin_master')
@section('admin')
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Add Post</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="">
                            @csrf
                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="title_en" class="form-control form-control-lg" id="title_en" placeholder="Title English">
                                  <label class="form-label" for="title_en">Title English</label>
                                </span>
                                @error('title_en')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="title_tr" class="form-control form-control-lg" id="title_tr" placeholder="Title Turkish">
                                  <label class="form-label" for="title_tr">Title Turkish</label>
                                </span>
                                @error('title_tr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="title_ru" class="form-control form-control-lg" id="title_ru" placeholder="Title Russian">
                                  <label class="form-label" for="title_ru">Title Russian</label>
                                </span>
                                @error('title_ru')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="category_id">
                                        <option value="">-- Select Category --</option>
                                        @foreach($category as $row)
                                            <option value="{{ $row->id }}">{{ $row->category_en }} | {{ $row->category_tr }}</option>
                                        @endforeach
                                    </select>
                                    <span>Category</span>
                                </label>
                            </div>

                            <div class="col-6">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="subcategory_id">
                                        <option value="">India</option>
                                    </select>
                                    <span>Subcategory</span>
                                </label>
                            </div>

                            <div class="col-6">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="district_id">
                                        <option value="">-- Select District --</option>
                                        @foreach($district as $row)
                                            <option value="{{ $row->id }}">{{ $row->district_en }} | {{ $row->district_tr }}</option>
                                        @endforeach
                                    </select>
                                    <span>District</span>
                                </label>
                            </div>

                            <div class="col-6">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="subdistrict_id">
                                        <option value="">India</option>
                                    </select>
                                    <span>Sub-District</span>
                                </label>
                            </div>

                            <div class="col-12 pt-2">
                                <span class="float-label">
                                  <input type="file" name="image" class="form-control" id="image">
                                  <label class="form-label" for="image">Image Upload</label>
                                </span>
                            </div>

                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="tag_en" class="form-control form-control-lg" id="tag_en" placeholder="tag English">
                                  <label class="form-label" for="tag_en">Tag English</label>
                                </span>
                            </div>
                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="tag_tr" class="form-control form-control-lg" id="tag_tr" placeholder="Tag Turkish">
                                  <label class="form-label" for="tag_tr">Tag Turkish</label>
                                </span>
                            </div>
                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="tag_ru" class="form-control form-control-lg" id="tag_ru" placeholder="Tag Russian">
                                  <label class="form-label" for="tag_ru">Tag Russian</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-label" style="color: #2794EA" for="details_en">Details English</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="details_en" name="details_en" rows="10" cols="30"></textarea>
                                </span>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="details_tr" style="color: #2794EA">Details Turkish</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="details_tr" rows="5" cols="30" name="details_tr"></textarea>
                                </span>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="details_ru" style="color: #2794EA">Details Russian</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="details_ru" rows="5" cols="30" name="details_ru"></textarea>
                                </span>
                            </div>
                            <hr>
                            <h4 class="text-center">Extra Option</h4>

                            <div class="col-3">
                                <div class="form-check form-switch pageheader-switch mb-1">
                                    <input class="form-check-input form-control" type="checkbox" name="headline" id="headline">
                                    <label class="form-check-label" for="headline">Headline</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-switch pageheader-switch mb-1">
                                    <input class="form-check-input form-control" type="checkbox" name="bigthumbnail" id="bigthumbnail">
                                    <label class="form-check-label" for="bigthumbnail">General Big Thumbnail</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-switch pageheader-switch mb-1">
                                    <input class="form-check-input form-control" type="checkbox" name="first_section" id="first_section">
                                    <label class="form-check-label" for="first_section">First Section</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-switch pageheader-switch mb-1">
                                    <input class="form-check-input form-control" type="checkbox" name="first_section_thumbnail" id="first_section_thumbnail">
                                    <label class="form-check-label" for="first_section_thumbnail">First Section Big Thumbnail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#details_en' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#details_tr' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#details_ru' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
