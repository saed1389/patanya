@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Add Special Category</h4>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('store.specialCategory') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_tr" class="form-control form-control-lg" id="category_tr" placeholder="Special Category Turkish" required="">
                                  <label class="form-label" for="category_tr">Special Category Turkish <span class="text-danger">*</span></label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_en" class="form-control form-control-lg" id="category_en" placeholder="Special Category English">
                                  <label class="form-label" for="category_en">Special Category English</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_ru" class="form-control form-control-lg" id="category_ru" placeholder="Special Category Russian">
                                  <label class="form-label" for="category_ru">Special Category Russian</label>
                                </span>
                            </div>

                            <div class="col-12 pt-2">
                                <span class="float-label">
                                  <input type="file" name="image" class="form-control" id="image">
                                  <label class="form-label" for="image">Image Upload (850 x 560)</label>
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
