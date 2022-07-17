@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Edit Ads Home page</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.ads', $ads->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="link" class="form-control form-control-lg" id="link" value="{{ $ads->link }}" required="">
                                  <label class="form-label" for="link">Link</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="type" id="type" disabled>
                                        <option value="1" {{ $ads->type == "1" ? "selected" : "" }}>Top 1440 x 332 </option>
                                        <option value="2" {{ $ads->type == "2" ? "selected" : "" }}>Slider Top (1) 456 x 98 </option>
                                        <option value="3" {{ $ads->type == "3" ? "selected" : "" }}>Slider Top (2) 456 x 98 </option>
                                        <option value="4" {{ $ads->type == "4" ? "selected" : "" }}>Slider Left (1) 224 x 316  </option>
                                        <option value="5" {{ $ads->type == "5" ? "selected" : "" }}>Slider Left (2) 224 x 316  </option>
                                        <option value="6" {{ $ads->type == "6" ? "selected" : "" }}>Slider Right (1) 224 x 316  </option>
                                        <option value="7" {{ $ads->type == "7" ? "selected" : "" }}>Slider Right (2) 224 x 316  </option>
                                        <option value="8" {{ $ads->type == "8" ? "selected" : "" }}>Slider Bottom (1) 224 x 316  </option>
                                        <option value="9" {{ $ads->type == "9" ? "selected" : "" }}>Slider Bottom (2) 224 x 316  </option>
                                        <option value="10" {{ $ads->type == "10" ? "selected" : "" }}>Slider Bottom (3) 224 x 316  </option>
                                        <option value="11" {{ $ads->type == "11" ? "selected" : "" }}>Category (1) 348 x 324 </option>
                                        <option value="12" {{ $ads->type == "12" ? "selected" : "" }}>Category (2) 348 x 324 </option>
                                        <option value="13" {{ $ads->type == "13" ? "selected" : "" }}>1 Category Bottom 1440 x 224 </option>
                                        <option value="14" {{ $ads->type == "14" ? "selected" : "" }}>2 Category Bottom 1440 x 224 </option>
                                        <option value="15" {{ $ads->type == "15" ? "selected" : "" }}>3 Category Bottom (1) 918 x 132 </option>
                                        <option value="16" {{ $ads->type == "16" ? "selected" : "" }}>3 Category Bottom (2) 918 x 132 </option>
                                        <option value="17" {{ $ads->type == "17" ? "selected" : "" }}>3 Category Bottom (3) 918 x 132 </option>
                                        <option value="18" {{ $ads->type == "18" ? "selected" : "" }}>Writer Right (1) 348 x 324 </option>
                                        <option value="19" {{ $ads->type == "19" ? "selected" : "" }}>Writer Right (2) 348 x 324 </option>
                                        <option value="20" {{ $ads->type == "20" ? "selected" : "" }}>Footer (1) 1440 x 224 </option>
                                        <option value="21" {{ $ads->type == "21" ? "selected" : "" }}>Footer (2) 1440 x 224 </option>
                                    </select>
                                    <span>Photo Type</span>
                                </label>
                            </div>

                            <div class="col-6">
                                <span class="float-label">
                                  <input type="file" name="ads" class="form-control" id="ads">
                                  <label class="form-label" for="ads">Image Upload</label>
                                </span>
                            </div>
                            <div class="col-6">
                                <span class="float-label">
                                  <input type="hidden" name="oldimage" value="{{ $ads->ads }}">
                                  <label class="form-label" for="oldimage">Old Image</label>
                                </span>
                                <img id="showImage" src="{{ URL::to($ads->ads) }}" alt="" style="height: 100px;">
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('#ads').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
@endsection
