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
                        <h4>Notice Setting</h4>
                        <div class="template-demo">
                            @if($notice->status == 1)
                                <a href="{{ route('deactive.notice', $notice->id) }}"><button class="btn btn-danger btn-fw" type="button">Deactivate</button></a>
                            @else
                                <a href="{{ route('active.notice', $notice->id) }}"><button class="btn btn-primary btn-fw" type="button">Active</button></a>
                            @endif
                        </div>
                        @if($notice->status == 1)
                            <small class="text-success">Now Notice Are Active</small>
                        @else
                            <small class="text-danger">Now Notice Are Deactivate</small>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.notice', $notice->id) }}">
                            @csrf
                            <div class="col-12">
                                <label class="form-label" style="color: #2794EA" for="notice">Notice Text</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="notice" name="notice" rows="10" cols="30">{{ $notice->notice }}</textarea>
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
            .create( document.querySelector( '#notice' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
