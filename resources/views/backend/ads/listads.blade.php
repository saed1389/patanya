@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Ads Page</h4>
                        <div class="">
                            <a href="{{ route('add.ads') }}"><button class="btn btn-primary btn-fw" style="float: right">Add Ads</button></a>
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
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">Link</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">Ads Image</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">Size</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 375px;">Status</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($ads as $row)
                    <tr class="row-selectable odd">
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->link }}</td>
                        <td><img src="{{ asset($row->ads) }}" alt="" style="width: 100px; height: 80px;"></td>
                        <td>
                            @if($row->type == 1)
                                Top 1440 x 332
                            @elseif($row->type == 2)
                                Slider Top (1) 456 x 98
                            @elseif($row->type == 3)
                                Slider Top (2) 456 x 98
                            @elseif($row->type == 4)
                                Slider Left (1) 224 x 316
                            @elseif($row->type == 5)
                                Slider Left (2) 224 x 316
                            @elseif($row->type == 6)
                                Slider Right (1) 224 x 316
                            @elseif($row->type == 7)
                                Slider Right (2) 224 x 316
                            @elseif($row->type == 8)
                                Slider Bottom (1) 224 x 316
                            @elseif($row->type == 9)
                                Slider Bottom (2) 224 x 316
                            @elseif($row->type == 10)
                                Slider Bottom (3) 224 x 316
                            @elseif($row->type == 11)
                                Category (1) 348 x 324
                            @elseif($row->type == 12)
                                Category (2) 348 x 324
                            @elseif($row->type == 13)
                                1 Category Bottom 1440 x 224
                            @elseif($row->type == 14)
                                2 Category Bottom 1440 x 224
                            @elseif($row->type == 15)
                                3 Category Bottom (1) 918 x 132
                            @elseif($row->type == 16)
                                3 Category Bottom (2) 918 x 132
                            @elseif($row->type == 17)
                                3 Category Bottom (3) 918 x 132
                            @elseif($row->type == 18)
                                Writer Right (1) 348 x 324
                            @elseif($row->type == 19)
                                Writer Right (2) 348 x 324
                            @elseif($row->type == 20)
                                Footer (1) 1440 x 224
                            @elseif($row->type == 21)
                                Footer (2) 1440 x 224
                            @endif

                        </td>
                        <td>{{ $row->status }}</td>
                        <td>
                            <a href="{{ route('delete.category', $row->id) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
