@extends('admin.admin_master')
@section('admin')
    @php
    $subdist = DB::table('subdistricts')->where('district_id', $post->district_id)->get();
    @endphp
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
                        <h4>Edit Special Post</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.SpecialPost', $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="title_tr" class="form-control form-control-lg" id="title_tr" value="{{ $post->title_tr }}" required="">
                                  <label class="form-label" for="title_tr">Title Turkish</label>
                                </span>
                                @error('title_tr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="title_en" class="form-control form-control-lg" id="title_en" value="{{ $post->title_en }}">
                                  <label class="form-label" for="title_en">Title English</label>
                                </span>
                            </div>



                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="title_ru" class="form-control form-control-lg" id="title_ru" value="{{ $post->title_ru }}">
                                  <label class="form-label" for="title_ru">Title Russian</label>
                                </span>
                                @error('title_ru')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="category_id">
                                        <option value="">-- Select Category --</option>
                                        @foreach($writers as $row)
                                            <option value="{{ $row->id }}"
                                            <?php if ($row->id == $post->writer_id) {
                                                echo 'selected';
                                            } ?>
                                            >{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                    <span>Writer</span>
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="category_id">
                                        <option value="">-- Select Category --</option>
                                        @foreach($category as $row)
                                            <option value="{{ $row->id }}"
                                            <?php if ($row->id == $post->category_id) {
                                                echo 'selected';
                                            } ?>
                                            >{{ $row->category_en }} | {{ $row->category_tr }}</option>
                                        @endforeach
                                    </select>
                                    <span>Category</span>
                                </label>
                            </div>

                            <div class="col-6">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="district_id">
                                        <option value="">-- Select District --</option>
                                        @foreach($district as $row)
                                            <option value="{{ $row->id }}"
                                            <?php if ($row->id == $post->district_id) {
                                                echo 'selected';
                                            } ?>
                                            >{{ $row->district_en }} | {{ $row->district_tr }}</option>
                                        @endforeach
                                    </select>
                                    <span>District</span>
                                </label>
                            </div>

                            <div class="col-6">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="subdistrict_id" id="subdistrict_id">
                                        <option value="" disabled="" selected="">-- Select Sub-District --</option>
                                        @foreach($subdist as $row)
                                            <option value="{{ $row->id }}"
                                            <?php if ($row->id == $post->subdistrict_id) {
                                                echo 'selected';
                                            } ?>
                                            >{{ $row->subdistrict_en }} | {{ $row->subdistrict_tr }}</option>
                                        @endforeach
                                    </select>
                                    <span>Sub-District</span>
                                </label>
                            </div>

                            <div class="col-6">
                                <span class="float-label">
                                  <input type="file" name="image" class="form-control" id="image">
                                  <label class="form-label" for="image">Cover Image Upload</label>
                                </span>
                            </div>
                            <div class="col-6">
                                <span class="float-label">
                                  <input type="hidden" name="oldimage" value="{{ $post->image }}">
                                  <label class="form-label" for="tag_tr">Old Image</label>
                                </span>
                                <img src="{{ URL::to($post->image) }}" alt="" style="width: 70px; height: 50px;">
                            </div>

                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="tag_tr" class="form-control form-control-lg" id="tag_tr" value="{{ $post->tag_tr }}">
                                  <label class="form-label" for="tag_tr">Tag Turkish</label>
                                </span>
                            </div>
                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="tag_en" class="form-control form-control-lg" id="tag_en" value="{{ $post->tag_en }}">
                                  <label class="form-label" for="tag_en">Tag English</label>
                                </span>
                            </div>

                            <div class="col-4">
                                <span class="float-label">
                                  <input type="text" name="tag_ru" class="form-control form-control-lg" id="tag_ru" value="{{ $post->tag_ru }}">
                                  <label class="form-label" for="tag_ru">Tag Russian</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="details_tr" style="color: #2794EA">Details Turkish</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="details_tr" rows="5" cols="30" name="details_tr">
                                      {{ $post->details_tr }}
                                  </textarea>
                                </span>
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="color: #2794EA" for="details_en">Details English</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="details_en" name="details_en" rows="10" cols="30">
                                      {{ $post->details_en }}
                                  </textarea>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="details_ru" style="color: #2794EA">Details Russian</label>
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" id="details_ru" rows="5" cols="30" name="details_ru">
                                      {{ $post->details_ru }}
                                  </textarea>
                                </span>
                            </div>
                            <hr>
                            <h4 class="text-center">Extra Option</h4>


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

    <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="district_id"]').on('change', function (){
                var district_id = $(this).val();
                if(district_id) {
                    $.ajax({
                        url: "{{ url('/get/subdistrict/') }}/"+district_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $("#subdistrict_id").empty();
                            $.each(data, function (key, value){
                                $("#subdistrict_id").append('<option value="'+value.id+'">'+value.subdistrict_tr+'</option>');
                            });
                            //console.log(data);
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection
