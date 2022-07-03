@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>SubDistrict page</h4>
                        <div class="">
                            <a href="{{ route('add.subdistrict') }}"><button class="btn btn-primary btn-fw" style="float: right">Add SubDistrict</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <table id="myDataTable_no_filter"
                   class="table align-middle mb-0 card-table nowrap dataTable no-footer dtr-inline"
                   style="width: 1298px;">
                <thead>
                <tr>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;"> # </th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">SubDistrict English</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">SubDistrict Turkish</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">SubDistrict Russian</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">District Name</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($subdistrict as $row)
                    <tr class="row-selectable odd">
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->subdistrict_en }}</td>
                        <td>{{ $row->subdistrict_tr }}</td>
                        <td>
                            @if($row->subdistrict_ru == null)
                                <p>-</p>
                            @else
                                {{ $row->subdistrict_ru }}
                            @endif
                        </td>
                        <td>{{ $row->district_en }}</td>
                        <td>
                            <a href="{{ route('edit.subdistrict', $row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('delete.subdistrict', $row->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $subdistrict->links('pagination-links') }}
        </div>
    </div>
@endsection
