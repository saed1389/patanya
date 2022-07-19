@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Auto News page</h4>
                    </div>
                </div>
            </div>
            <table id="myDataTable_no_filter"
                   class="table align-middle mb-0 card-table nowrap dataTable no-footer dtr-inline"
                   style="width: 1298px;">
                <thead>
                <tr>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;"> # </th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">News Agency</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">Category</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;"> 1 </th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">NTV</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">Turkey</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;"><a href="{{ route('ntvTurkey.bot') }}">Generate</a></th>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
