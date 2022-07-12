@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Insert Photo</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('store.photo') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="title" class="form-control form-control-lg" id="title" placeholder="Photo Title">
                                  <label class="form-label" for="title">Photo Title</label>
                                </span>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 pt-2">
                                <span class="float-label">
                                  <input type="file" name="photo" class="form-control" id="photo">
                                  <label class="form-label" for="photo">Image Upload</label>
                                </span>
                            </div>


                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="type" id="type">
                                        <option value="1">Big Photo </option>
                                        <option value="0">Small Photo </option>
                                    </select>
                                    <span>Photo Type</span>
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

@endsection
