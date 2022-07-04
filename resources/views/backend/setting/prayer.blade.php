@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Update Prayer Setting</h4>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 maskking-form" method="post" action="{{ route('update.prayer', $prayer->id) }}">
                            @csrf
                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="fajr" class="form-control form-control-lg" id="fajr" value="{{ $prayer->fajr }}">
                                  <label class="form-label" for="fajr">Fajr</label>
                                </span>
                                @error('fajr')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="johor" class="form-control form-control-lg" id="johor" value="{{ $prayer->johor }}">
                                  <label class="form-label" for="johor">Johor</label>
                                </span>
                                @error('johor')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="asor" class="form-control form-control-lg" id="asor" value="{{ $prayer->asor }}">
                                  <label class="form-label" for="asor">Asor</label>
                                </span>
                            </div>


                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="magrib" class="form-control form-control-lg" id="magrib" value="{{ $prayer->magrib }}">
                                  <label class="form-label" for="magrib">Magrib</label>
                                </span>
                            </div>


                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="eaha" class="form-control form-control-lg" id="eaha" value="{{ $prayer->eaha }}">
                                  <label class="form-label" for="eaha">Eaha</label>
                                </span>
                            </div>

                            <div class="col-12">
                                <span class="float-label">
                                  <input type="text" name="jummah" class="form-control form-control-lg" id="jummah" value="{{ $prayer->jummah }}">
                                  <label class="form-label" for="jummah">Jummah</label>
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
