@extends('admin.admin_master')
@section('admin')

    <div class="container-fluid">
        <div class="row g-3 clearfix row-deck">
            <div class="col-12">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="d-flex align-items-md-start align-items-center flex-column flex-md-row">
                            <img src="{{ (!empty($adminDate->profile_image)) ? url('upload/admin_images/'. $adminDate->profile_image) : url('upload/no-image.png') }}" alt="" class="rounded-4" width="200px">
                            <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center">
                                <h4 class="mb-1 fw-light">{{ $adminDate->name }}</h4>
                                <p>Email: {{ $adminDate->email }}</p>
                                <span class="text-muted">Username: {{ $adminDate->username }}</span>

                            </div>
                            <a href="{{ route('edit.profile') }}" class="btn btn-success">Edit Profile</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
