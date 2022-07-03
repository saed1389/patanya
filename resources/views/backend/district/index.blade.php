@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>District page</h4>
                        <div class="">
                            <a href="{{ route('add.district') }}"><button class="btn btn-primary btn-fw" style="float: right">Add District</button></a>
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
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">District English</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">District Turkish</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">District Russian</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($district as $row)
                    <tr class="row-selectable odd">
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->district_en }}</td>
                        <td>{{ $row->district_tr }}</td>
                        <td>
                            @if($row->district_ru == null)
                                <p>-</p>
                            @else
                                {{ $row->district_ru }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit.district', $row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('delete.district', $row->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $district->links('pagination-links') }}
        </div>
    </div>
@endsection
