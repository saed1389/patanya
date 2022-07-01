@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header py-3 bg-transparent border-bottom-0">
                        <h6 class="card-title mb-0">Edit Profile</h6>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $editDate->name }}">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ $editDate->email }}">
                            </div>
                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="{{ $editDate->username }}">
                            </div>
                            <div class="col-12">
                                <label for="image" class="form-label">Profile Image</label>
                                <input type="file" id="image" name="profile_image" class="form-control">
                            </div>

                            <div class="col-3">
                                <img id="showImage" src="{{ (!empty($editDate->profile_image)) ? url('upload/admin_images/'. $editDate->profile_image) : url('upload/no-image.png') }}" alt="" class="rounded-4" width="200px">
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function (){
            $('#image').change(function (e){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
