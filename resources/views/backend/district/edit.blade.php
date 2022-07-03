@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update District</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.district', $district->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="district_en" class="form-control form-control-lg" id="district_en" value="{{ $district->district_en }}">
                                  <label class="form-label" for="district_en">District English</label>
                                </span>
                                @error('district_en')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="district_tr" class="form-control form-control-lg" id="district_tr" value="{{ $district->district_tr }}">
                                  <label class="form-label" for="district_tr">District Turkish</label>
                                </span>
                                @error('district_tr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="district_ru" class="form-control form-control-lg" id="district_ru" value="{{ $district->district_ru }}">
                                  <label class="form-label" for="district_ru">District Russian</label>
                                </span>
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
