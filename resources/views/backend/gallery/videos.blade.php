@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Video Gallery page</h4>
                        <div class="">
                            <a href="{{ route('add.video') }}"><button class="btn btn-primary btn-fw" style="float: right">Add Gallery</button></a>
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
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Video Title</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">Type</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($video as $row)
                    <tr class="row-selectable odd">
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->title }}</td>
                        <td>
                            @if($row->type == 1)
                                <span class="btn btn-success">Big Video</span>
                            @else
                                <span class="btn btn-info">Small Video</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('delete.category', $row->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $video->links('pagination-links') }}
        </div>
    </div>
@endsection
