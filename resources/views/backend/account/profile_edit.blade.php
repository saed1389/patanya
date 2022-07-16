@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Insert Ads</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="name" class="form-control form-control-lg" id="name" value="{{ $editDate->name }}">
                                  <label class="form-label" for="name">Name</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="mobile" class="form-control form-control-lg" id="mobile" value="{{ $editDate->mobile }}">
                                  <label class="form-label" for="mobile">Mobile</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="address" class="form-control form-control-lg" id="address" value="{{ $editDate->address }}">
                                  <label class="form-label" for="address">Address</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="position" class="form-control form-control-lg" id="position" value="{{ $editDate->position }}">
                                  <label class="form-label" for="position">Position</label>
                                </span>
                            </div>

                            <div class="col-12 pt-2">
                                <div class="col-6 pull-left">
                                    <span class="float-label">
                                        <input type="file" name="image" class="form-control" id="image">
                                        <label class="form-label" for="ads">Image Upload</label>
                                    </span>
                                </div>
                                <div class="col-6 pull-right">
                                    <span class="float-label text-center">
                                    <label class="form-label" for="ads">Old Image</label>
                                        <img id="showImage" src="{{ (!empty($editDate->image)) ? url('upload/user_image/'.$editDate->image) : url('upload/no-image.png') }}" alt="" style="width: 100px; height: auto; border: 1px solid #000000">

                                    </span>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="gender" id="gender">
                                        <option value="" selected="">Select Gender</option>
                                        <option value="Male" {{ $editDate->gender == "Male" ? "selected" : "" }}>Male</option>
                                        <option value="Female" {{ $editDate->gender == "Female" ? "selected" : "" }}>Female</option>
                                    </select>
                                    <span>Gender</span>
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
@endsection
