@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Insert Ads Home Page</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('store.ads') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="link" class="form-control form-control-lg" id="link" placeholder="Ads Link">
                                  <label class="form-label" for="link">Ads Link</label>
                                </span>
                                @error('link')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 pt-2">
                                <span class="float-label">
                                  <input type="file" name="ads" class="form-control" id="ads">
                                  <label class="form-label" for="ads">Image Upload</label>
                                </span>
                            </div>


                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="type" id="type">
                                        <option value="1">Top 1440 x 332 </option>
                                        <option value="2">Slider Top (1) 456 x 98 </option>
                                        <option value="3">Slider Top (2) 456 x 98 </option>
                                        <option value="4">Slider Left (1) 224 x 316  </option>
                                        <option value="5">Slider Left (2) 224 x 316  </option>
                                        <option value="6">Slider Right (1) 224 x 316  </option>
                                        <option value="7">Slider Right (2) 224 x 316  </option>
                                        <option value="8">Slider Bottom (1) 224 x 316  </option>
                                        <option value="9">Slider Bottom (2) 224 x 316  </option>
                                        <option value="10">Slider Bottom (3) 224 x 316  </option>
                                        <option value="11">Category (1) 348 x 324 </option>
                                        <option value="12">Category (2) 348 x 324 </option>
                                        <option value="13">1 Category Bottom 1440 x 224 </option>
                                        <option value="14">2 Category Bottom 1440 x 224 </option>
                                        <option value="15">3 Category Bottom (1) 918 x 132 </option>
                                        <option value="16">3 Category Bottom (2) 918 x 132 </option>
                                        <option value="17">3 Category Bottom (3) 918 x 132 </option>
                                        <option value="18">Writer Right (1) 348 x 324 </option>
                                        <option value="19">Writer Right (2) 348 x 324 </option>
                                        <option value="20">Footer (1) 1440 x 224 </option>
                                        <option value="21">Footer (2) 1440 x 224 </option>
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
