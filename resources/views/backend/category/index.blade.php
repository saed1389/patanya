@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Category page</h4>
                        <div class="">
                            <a href="{{ route('add.category') }}"><button class="btn btn-primary btn-fw" style="float: right">Add Category</button></a>
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
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Category English</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">Category Turkish</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">Category Russian</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($category as $row)
                <tr class="row-selectable odd">
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->category_en }}</td>
                    <td>{{ $row->category_tr }}</td>
                    <td>
                        @if($row->category_ru == null)
                            <p>-</p>
                        @else
                        {{ $row->category_ru }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('edit.category', $row->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('delete.category', $row->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $category->links('pagination-links') }}
        </div>
    </div>
@endsection
