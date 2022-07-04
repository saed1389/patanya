@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update Social Links</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.social', $social->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="facebook" class="form-control form-control-lg" id="facebook" value="{{ $social->facebook }}">
                                  <label class="form-label" for="facebook">Facebook</label>
                                </span>
                                @error('facebook')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="twitter" class="form-control form-control-lg" id="twitter" value="{{ $social->twitter }}">
                                  <label class="form-label" for="twitter">Twitter</label>
                                </span>
                                @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="youtube" class="form-control form-control-lg" id="youtube" value="{{ $social->youtube }}">
                                  <label class="form-label" for="youtube">Youtube</label>
                                </span>
                            </div>


                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="linkedin" class="form-control form-control-lg" id="linkedin" value="{{ $social->linkedin }}">
                                  <label class="form-label" for="linkedin">Linkedin</label>
                                </span>
                            </div>


                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="instagram" class="form-control form-control-lg" id="instagram" value="{{ $social->instagram }}">
                                  <label class="form-label" for="instagram">Instagram</label>
                                </span>
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
