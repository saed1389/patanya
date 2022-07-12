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
                        <h4>Insert Video</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('store.video') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="title" class="form-control form-control-lg" id="title" placeholder="Video Title">
                                  <label class="form-label" for="title">Video Title</label>
                                </span>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label" style="color: #2794EA" for="embed_code">Embed Code</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="embed_code" name="embed_code" rows="10" cols="30"></textarea>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="type" id="type">
                                        <option value="1">Big Video </option>
                                        <option value="0">Small Video </option>
                                    </select>
                                    <span>Video Type</span>
                                </label>
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
            .create( document.querySelector( '#embed_code' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
