@extends('admin.include.master')
    @section('content')
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Rank Lists</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Rank</a></li>
                                    <li class="breadcrumb-item active">Lists</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">TOP 200 DISTRIBUTORS</h5>
                            </div>

                            <div class="card-body">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Top</th>
                                            <th>Distributor's Name</th>
                                            <th>Total Sales</th>
                                        </tr>
                                    </thead>
                                    <tbody id="filteredData">
                                        @foreach($distributorData as $data)
                                            <tr>
                                                <td>{{ $data->rank }}</td>
                                                <td>{{ $data->distributor_name }}</td>
                                                <td>${{ $data->total_purchase_amount }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
