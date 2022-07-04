@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update Website Link</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.website', $website->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="website_name" class="form-control form-control-lg" id="website_name" value="{{ $website->website_name }}">
                                  <label class="form-label" for="website_name">Website Name</label>
                                </span>
                                @error('website_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="website_link" class="form-control form-control-lg" id="website_link" value="{{ $website->website_link }}">
                                  <label class="form-label" for="website_link">Website Name</label>
                                </span>
                                @error('website_link')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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

@endsection
