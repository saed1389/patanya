@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update SubDistrict</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.subdistrict', $subdistrict->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subdistrict_en" class="form-control form-control-lg" id="subdistrict_en" value="{{ $subdistrict->subdistrict_en }}">
                                  <label class="form-label" for="subdistrict_en">SubDistrict English</label>
                                </span>
                                @error('subdistrict_en')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subdistrict_tr" class="form-control form-control-lg" id="subdistrict_tr" value="{{ $subdistrict->subdistrict_tr }}">
                                  <label class="form-label" for="subdistrict_tr">SubDistrict Turkish</label>
                                </span>
                                @error('subdistrict_tr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subdistrict_ru" class="form-control form-control-lg" id="subdistrict_ru" value="{{ $subdistrict->subdistrict_ru }}">
                                  <label class="form-label" for="subdistrict_ru">SubDistrict Russian</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="district_id">
                                        <option value="" disabled="" selected="">-- Select District -- </option>
                                        @foreach($district as $row)
                                            <option value="{{ $row->id }}"
                                            <?php if ($row->id == $subdistrict->district_id) echo "selected"; ?>
                                            >{{ $row->district_en }} | {{ $row->district_tr }}</option>
                                        @endforeach
                                    </select>
                                    <span>Select District</span>
                                </label>
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
