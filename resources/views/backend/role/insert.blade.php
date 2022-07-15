@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Insert User Role</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('store.writer') }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Name">
                                  <label class="form-label" for="name">Name</label>
                                </span>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
                                  <label class="form-label" for="email">Email</label>
                                </span>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                                  <label class="form-label" for="password">Password</label>
                                </span>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="category">Category</label>
                                        <input class="form-check-input" type="checkbox" id="category" value="1" name="category" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="district">District</label>
                                        <input class="form-check-input" type="checkbox" id="district" value="1" name="district" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="post">Posts</label>
                                        <input class="form-check-input" type="checkbox" id="post" value="1" name="post" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="setting">Setting</label>
                                        <input class="form-check-input" type="checkbox" id="setting" value="1" name="setting" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="website">Website</label>
                                        <input class="form-check-input" type="checkbox" id="website" value="1" name="website" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="gallery">Gallery</label>
                                        <input class="form-check-input" type="checkbox" id="gallery" value="1" name="gallery" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="ads">Advertisement</label>
                                        <input class="form-check-input" type="checkbox" id="ads" value="1" name="ads" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="role">Role</label>
                                        <input class="form-check-input" type="checkbox" id="role" value="1" name="role" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                    </div>
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

@endsection
