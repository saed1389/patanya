@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>All Posts page</h4>
                        <div class="">
                            <a href="{{ route('create.post') }}"><button class="btn btn-primary btn-fw" style="float: right">Add Post</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <table id="myDataTable_no_filter"
                   class="table align-middle mb-0 card-table nowrap dataTable no-footer dtr-inline"
                   style="width: 1298px;">
                <thead>
                <tr>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 50px;"> # </th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">Post Title</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">Category</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">District</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Image</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Post Date</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($post as $row)
                    <tr class="row-selectable odd">
                        <td>{{ $i++ }}</td>
                        <td>{{ Str::limit(html_entity_decode($row->title_tr, 70)) }}</td>
                        <td>{{ $row->category_tr }}</td>
                        <td>{{ $row->district_tr }}</td>
                        <td><img src="{{ $row->image }}" alt="" style="width: 50px; height: 50px"></td>
                        <td>{{ \Carbon\Carbon::parse($row->post_date)->diffForHumans() }}</td>

                        <td>
                            <a href="{{ route('edit.post', $row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('delete.post', $row->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $post->links('pagination-links') }}
        </div>
    </div>
@endsection
