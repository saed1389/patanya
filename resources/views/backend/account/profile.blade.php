@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>User Profile</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card mb-3">
                            <div class="card-body text-center p-4">
                                <img src="{{asset('backend/assets/img/profile_av.png')}}" alt="" class="rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0"> Name: {{ Auth::user()->name }}</h5>
                                <p class="card-text">User Email: {{ Auth::user()->email }}</p>
                                <p class="card-text">User Mobile: {{ Auth::user()->mobile }}</p>
                                <p class="card-text">User Address: {{ Auth::user()->address }}</p>
                                <p class="card-text">User Gender: {{ Auth::user()->gender }}</p>
                                <p class="card-text">User Position: {{ Auth::user()->position }}</p>
                                <div class="mt-3">
                                    <a href="{{ route('profile.edit') }}" class="btn btn-primary"><i class="fa fa-edit me-2"></i>Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
