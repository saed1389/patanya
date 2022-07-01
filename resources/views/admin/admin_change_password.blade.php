@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header py-3 bg-transparent border-bottom-0">
                        <h6 class="card-title mb-0">Change Password</h6>
                    </div>
                    @if(count($errors))
                        @foreach( $errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show"> {{ $error }}</p>
                        @endforeach
                    @endif
                    <div class="card-body">
                        <form class="row g-3" method="post" action="{{ route('update.password') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="oldpassword" class="form-label">Old Password</label>
                                <input type="password" id="oldpassword" name="oldpassword" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="newpassword" class="form-label">New Password</label>
                                <input type="password" id="newpassword" name="newpassword" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
