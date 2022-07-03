@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update SubCategory</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.subcategory', $subcategory->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subcategory_en" class="form-control form-control-lg" id="subcategory_en" value="{{ $subcategory->subcategory_en }}">
                                  <label class="form-label" for="subcategory_en">SubCategory English</label>
                                </span>
                                @error('subcategory_en')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subcategory_tr" class="form-control form-control-lg" id="subcategory_tr" value="{{ $subcategory->subcategory_tr }}">
                                  <label class="form-label" for="subcategory_tr">SubCategory Turkish</label>
                                </span>
                                @error('subcategory_tr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subcategory_ru" class="form-control form-control-lg" id="subcategory_ru" value="{{ $subcategory->subcategory_ru }}">
                                  <label class="form-label" for="subcategory_ru">SubCategory Russian</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="category_id">
                                        <option value="" disabled="" selected="">-- Select Category -- </option>
                                        @foreach($category as $row)
                                            <option value="{{ $row->id }}"
                                            <?php if ($row->id == $subcategory->category_id) echo "selected"; ?>
                                            >{{ $row->category_en }} | {{ $row->category_tr }}</option>
                                        @endforeach
                                    </select>
                                    <span>Select Category</span>
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
