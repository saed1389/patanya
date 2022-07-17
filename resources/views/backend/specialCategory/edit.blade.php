@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update Special Category</h4>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.specialCategory', $SpecialCategory->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_tr" class="form-control form-control-lg" id="category_tr" required="" value="{{ $SpecialCategory->category_tr }}">
                                  <label class="form-label" for="category_tr">Special Category Turkish</label>
                                </span>
                                @error('category_tr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_en" class="form-control form-control-lg" id="category_en" value="{{ $SpecialCategory->category_en }}">
                                  <label class="form-label" for="category_en">Special Category English</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_ru" class="form-control form-control-lg" id="category_ru" value="{{ $SpecialCategory->category_ru }}">
                                  <label class="form-label" for="category_ru">Special Category Russian</label>
                                </span>
                            </div>

                            <div class="col-6">
                                <span class="float-label">
                                  <input type="file" name="image" class="form-control" id="image">
                                  <label class="form-label" for="image">Image Upload</label>
                                </span>
                            </div>
                            <div class="col-6">
                                <span class="float-label">
                                  <input type="hidden" name="oldimage" value="{{ $SpecialCategory->image }}">
                                  <label class="form-label" for="">Old Image</label>
                                </span>
                                <img src="{{ URL::to($SpecialCategory->image) }}" alt="" style="width: 70px; height: 50px;">
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
