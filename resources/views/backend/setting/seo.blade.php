@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update SEO</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.seo', $seo->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="meta_author" class="form-control form-control-lg" id="meta_author" value="{{ $seo->meta_author }}">
                                  <label class="form-label" for="meta_author">Meta Author</label>
                                </span>
                                @error('meta_author')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="meta_title" class="form-control form-control-lg" id="meta_title" value="{{ $seo->meta_title }}">
                                  <label class="form-label" for="meta_title">Meta Title</label>
                                </span>
                                @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="meta_keyword" class="form-control form-control-lg" id="meta_keyword" value="{{ $seo->meta_keyword }}">
                                  <label class="form-label" for="meta_keyword">Meta Keyword</label>
                                </span>
                            </div>


                            <div class="col-12">
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" name="meta_description" id="meta_description" rows="5" cols="30">{{ $seo->meta_description }}</textarea>
                                  <label class="form-label" for="meta_description">Meta Description</label>
                                </span>
                            </div>


                            <div class="col-12">
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" name="google_analytics" id="google_analytics" rows="5" cols="30">{{ $seo->google_analytics }}</textarea>
                                  <label class="form-label" for="google_analytics">Google Analytics</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="google_verification" class="form-control form-control-lg" id="google_verification" value="{{ $seo->google_verification }}">
                                  <label class="form-label" for="google_verification">Google Verification</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <textarea class="form-control form-control-lg" name="alexa_analytics" id="alexa_analytics" rows="5" cols="30">{{ $seo->alexa_analytics }}</textarea>
                                  <label class="form-label" for="alexa_analytics">Alexa Analytics</label>
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
