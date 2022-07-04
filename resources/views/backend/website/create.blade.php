@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Add Website Link</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('store.website') }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="website_name" class="form-control form-control-lg" id="website_name" placeholder="Website Name">
                                  <label class="form-label" for="website_name">Website Name</label>
                                </span>
                                @error('website_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="website_link" class="form-control form-control-lg" id="website_link" placeholder="Website Link">
                                  <label class="form-label" for="website_link">Website Link</label>
                                </span>
                                @error('website_link')
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
