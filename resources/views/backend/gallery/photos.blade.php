@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Photo Gallery page</h4>
                        <div class="">
                            <a href="{{ route('add.photo') }}"><button class="btn btn-primary btn-fw" style="float: right">Add Gallery</button></a>
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
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Photo Title</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">Photo Image</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">Type</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($photo as $row)
                    <tr class="row-selectable odd">
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->title }}</td>
                        <td><img src="{{ asset($row->photo) }}" alt="" style="width: 50px; height: 50px;"></td>
                        <td>
                            @if($row->type == 1)
                                <span class="btn btn-success">Big Photo</span>
                            @else
                                <span class="btn btn-info">Small Photo</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('delete.photo', $row->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $photo->links('pagination-links') }}
        </div>
    </div>
@endsection
