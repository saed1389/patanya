@extends('admin.admin_master')
@section('admin')

<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 mb-3 align-items-center">
            <div class="col">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item"><a class="text-secondary" href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
        </div> <!-- .row end -->
        <div class="row align-items-center">
            <div class="col">
                <h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, {{ Auth::user()->name  }}!</h1>
                <small class="text-muted">You have 12 new messages and 7 new notifications.</small>
            </div>
        </div> <!-- .row end -->
    </div>
</div>
<!-- start: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 mb-3 row-deck">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="text-muted text-uppercase small">Current Stock</div>
                        <div class="mt-1">
                            <span class="fw-bold h4 mb-0">567</span>
                            <span class="text-success ms-1">Unit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="text-muted text-uppercase small">Stock Value</div>
                        <div class="mt-1">
                            <span class="fw-bold h4 mb-0">38,765</span>
                            <span class="text-success ms-1">USD</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="text-muted text-uppercase small">Stock In</div>
                        <div class="mt-1">
                            <span class="fw-bold h4 mb-0">55</span>
                            <span class="text-success ms-1">Unit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="text-muted text-uppercase small">to be invoiced</div>
                        <div class="mt-1">
                            <span class="fw-bold h4 mb-0">5</span>
                            <span class="text-success ms-1">Qty</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="text-muted text-uppercase small">Labor Cost</div>
                        <div class="mt-1">
                            <span class="fw-bold h4 mb-0">3,908</span>
                            <span class="text-success ms-1">USD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .row end -->
        <div class="row g-3 row-deck">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title m-0">Sales Order</h6>
                        <div class="dropdown morphing scale-left">
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <table id="myDataTable_no_filter" class="table myDataTable card-table mb-0">
                        <thead>
                        <tr>
                            <th>Channel</th>
                            <th>Draft</th>
                            <th>Confirmed</th>
                            <th>Packed</th>
                            <th>Shipped</th>
                            <th>Invoiced</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Other</td>
                            <td>0</td>
                            <td>22</td>
                            <td>3</td>
                            <td>18</td>
                            <td>56</td>
                        </tr>
                        <tr>
                            <td>Etary</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td>6</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>Shopify</td>
                            <td>0</td>
                            <td>2</td>
                            <td>12</td>
                            <td>18</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <td>Magento</td>
                            <td>0</td>
                            <td>16</td>
                            <td>8</td>
                            <td>11</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>Wordpress</td>
                            <td>0</td>
                            <td>18</td>
                            <td>16</td>
                            <td>76</td>
                            <td>22</td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- .card end -->
            </div>
        </div> <!-- .row end -->
    </div>
</div>
@endsection
