@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>All Special Posts page</h4>
                        <div class="">
                            <a href="{{ route('create.SpecialPost') }}">
                                <button class="btn btn-primary btn-fw" style="float: right">Add Special Post</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <table id="myDataTable_no_filter"
                   class="table align-middle mb-0 card-table nowrap dataTable no-footer dtr-inline"
                   style="width: 1298px;">
                <thead>
                <tr>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 50px;"> #</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">Post Special Title</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">Category</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Image</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Post Date</th>
                    @if(Auth::user()->type == 1)
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Status</th>
                    @endif
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($post as $row)
                    <tr class="row-selectable odd">
                        <td>{{ $i++ }}</td>
                        <td>{{ Str::limit($row->title_tr, 20) }}</td>
                        <td>{{ $row->category_tr }}</td>
                        <td>{{ $row->district_tr }}</td>
                        <td><img src="{{ $row->image }}" alt="" style="width: 50px; height: 50px"></td>
                        <td>{{ \Carbon\Carbon::parse($row->post_date)->diffForHumans() }}</td>
                        @if(Auth::user()->type == 1)
                            <td><input class="form-check-input active" id="status" type="checkbox" data-id="{{$row->id}}"
                                       name="status" value="{{ $row->id }}" @if($row->status == 1) checked="" @endif>
                            </td>
                        @endif
                        <td>
                            <a href="{{ route('edit.SpecialPost', $row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('delete.SpecialPost', $row->id) }}"
                               onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $post->links('pagination-links') }}
        </div>
    </div>

    <script>
        $(document).ready(function(e){
            $("input.active").click(function() {
                // store the values from the form checkbox, then send via ajax below
                var check_active = $(this).is(':checked') ? 1 : 0;
                var check_id = $(this).attr('value');

                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ url('/get/ChangeStatus') }}/"+check_id+"/"+check_active,
                    data: { _token : $('meta[name="csrf-token"]').attr('content'),id: check_id, active: check_active},
                    success: function(response){
                        alert('Data Updated Successfully');
                    }
                });
                return true;
            });
        });
    </script>
@endsection
