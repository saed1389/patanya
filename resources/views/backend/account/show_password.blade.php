@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Change Password</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('change.password') }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="password" name="oldpasswrod" class="form-control form-control-lg" id="oldpasswrod" placeholder="Current Password">
                                  <label class="form-label" for="oldpasswrod">Current Password</label>
                                </span>
                                @error('oldpasswrod')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="New Password">
                                  <label class="form-label" for="password">New Password</label>
                                </span>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="password" name="password_confirmation" class="form-control form-control-lg" id="password_confirmation" placeholder="Confirm Password">
                                  <label class="form-label" for="password_confirmation">Confirm Password</label>
                                </span>
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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

@endsection
