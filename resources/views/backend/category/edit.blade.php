@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update Category</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.category', $category->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_en" class="form-control form-control-lg" id="category_en" value="{{ $category->category_en }}">
                                  <label class="form-label" for="category_en">Category English</label>
                                </span>
                                @error('category_en')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_tr" class="form-control form-control-lg" id="category_tr" value="{{ $category->category_tr }}">
                                  <label class="form-label" for="category_tr">Category Turkish</label>
                                </span>
                                @error('category_tr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="category_ru" class="form-control form-control-lg" id="category_ru" value="{{ $category->category_ru }}">
                                  <label class="form-label" for="category_ru">Category Russian</label>
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
