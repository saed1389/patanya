@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Add SubCategory</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('store.subcategory') }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subcategory_en" class="form-control form-control-lg" id="subcategory_en" placeholder="SubCategory English">
                                  <label class="form-label" for="subcategory_en">SubCategory English</label>
                                </span>
                                @error('subcategory_en')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subcategory_tr" class="form-control form-control-lg" id="subcategory_tr" placeholder="SubCategory Turkish">
                                  <label class="form-label" for="subcategory_tr">SubCategory Turkish</label>
                                </span>
                                @error('subcategory_tr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="subcategory_ru" class="form-control form-control-lg" id="subcategory_ru" placeholder="SubCategory Russian">
                                  <label class="form-label" for="subcategory_ru">SubCategory Russian</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <label class="form-group float-label">
                                    <select class="form-control form-control-lg custom-select" name="category_id">
                                        <option value="" disabled="" selected="">-- Select Category -- </option>
                                        @foreach($category as $row)
                                            <option value="{{ $row->id }}">{{ $row->category_en }} | {{ $row->category_tr }}</option>
                                        @endforeach
                                    </select>
                                    <span>Select Category</span>
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
