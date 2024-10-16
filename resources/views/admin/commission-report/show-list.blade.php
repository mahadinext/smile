@extends('admin.include.master')
    @section('content')

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Transaction Report</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Report</a></li>
                                    <li class="breadcrumb-item active">Commission Report</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <form method="POST" action="{{ route('filter.data') }}" enctype="multipart/form-data" id="filterForm">
                                    @csrf
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title mb-0 fw-semibold flex-grow-1"></h5>
                                        <div>
                                            <button type="submit" class="btn btn-success" id="filterBtn">
                                                <i class="ri-filter-2-line align-bottom"></i> Filters
                                            </button>
                                        </div>
                                    </div>
                                    <div class="collaps show" id="collapseExample">
                                        <div class="row mt-3 g-3">
                                            <div class="col-6">
                                                <h6 class="text-uppercase fs-12 mb-2">Distributor</h6>
                                                <!-- <input type="text" class="typeahead form-control" placeholder="Search by ID, Username, First Name, Last Name"
                                                    autocomplete="on" id="searchTerm" name="searchTerm"> -->

                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search by ID, Username, First Name, Last Name" autocomplete="off"
                                                        id="searchTerm" name="searchTerm">

                                                        <input type="hidden" id="distributorId" name="distributorId">

                                                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                                            id="search-close-options" style="float: right; position: relative; bottom: 27px; right: 10px;"></span>
                                                    </div>

                                                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                                        <div data-simplebar style="max-height: 320px;">
                                                            <div class="dropdown-header">
                                                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                                            </div>
                                                            <div id="autocomplete-term"></div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-uppercase fs-12 mb-2">From</h6>
                                                <input type="date" name="date_from" id="from" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" placeholder="Select date" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-uppercase fs-12 mb-2">To</h6>
                                                <input type="date" name="date_to" id="to" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" placeholder="Select date" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Purchaser</th>
                                            <th>Distributor</th>
                                            <th>Referred Distributor</th>
                                            <th>Order Date</th>
                                            <th>Order Total</th>
                                            <th>Percentage</th>
                                            <th>Commission</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="filteredData">
                                        @foreach($commissionData as $key => $data)
                                            <tr>
                                                <td>{{ $data->invoice_number }}</td>
                                                <td>{{ $data->purchaser }}</td>
                                                <td>{{ $data->distributor_name }}</td>
                                                <td>{{ $data->referred_distributor }}</td>
                                                <td>{{ $data->order_date }}</td>
                                                <td>{{ $data->order_amount }}</td>
                                                <td>{{ $data->percentage }}%</td>
                                                <td>${{ $data->commission }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="view-item" data-invoice="{{ $data->invoice_number }}" data-oid="{{ $data->id }}">View items</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        <div class="modal fade zoomIn" id="orderDetailModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-3 bg-soft-success">
                        <h5 class="modal-title" id="orderDetailModalLabel">Invoice: <span id="order_invoice_no"></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="addProjectBtn-close"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <table id="example" class="order-detail-table table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SKU</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody id="orderData">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#searchTerm").keyup(function () {
                    var searchTerm = $(this).val();
                    var url = "/auto-complete/"+searchTerm;
                    // alert(url);

                    if (searchTerm != "") {
                        $.ajax({
                            type:'GET',
                            url:url,
                            dataType:'json',
                            success:function(data){
                                // alert(data);
                                var rows = autoCompleteData(data);
                                $('#search-dropdown').addClass('show');
                            }
                            ,error: function (xhr, ajaxOptions, thrownError) {
                                console.log(xhr.status);
                                console.log(thrownError);
                            }
                        });
                    }
                    else {
                        $('#search-dropdown').removeClass('show');
                    }

                });

                function autoCompleteData(data){
                    $("#autocomplete-term").empty();
                    $.each(data, function( index, value ) {
                        var row = $('<a href="javascript:void(0);" class="dropdown-item notify-item">'+
                                        '<span data-id="' + value.id + '" class="autocomplete-term">' + value.first_name + ' ' + value.last_name + '</span>'+
                                    '</a>');
                        $("#autocomplete-term").append(row);
                    });
                    // return row;
                }

                $(document).on('click', '.autocomplete-term', function () {
                    var autocompleteTerm = $(this).html();
                    var dataId = $(this).data('id');
                    $("#distributorId").val(dataId);
                    $("#searchTerm").val(autocompleteTerm);
                    $('#search-dropdown').removeClass('show');
                    // alert(autocompleteTerm);
                });

                function showData(data){
                    var table = $('.order-detail-table').DataTable();
                    table.clear();
                    // $("#orderData").empty();
                    $.each(data, function( index, value ) {
                        table.row.add([value.sku, value.name, "$"+value.price, value.quantity, "$"+(value.price*value.quantity)]).draw(false);
                    });
                    // return row;
                }

                $('#example').on('click', '.view-item', function () {
                    var order_id = $(this).data('oid');
                    var invoice = $(this).data('invoice');
                    var url = '/order-detail/'+order_id;
                    // alert(invoice);

                    $.ajax({
                        type:'get',
                        url:url,
                        dataType:'json',
                        success:function(data){
                            $('#order_invoice_no').html(invoice);
                            var rows = showData(data.queryData);
                            $('#orderDetailModal').modal('show');
                        }
                        ,error: function (xhr, ajaxOptions, thrownError) {
                            console.log(xhr.status);
                            console.log(thrownError);
                        }
                    });
                });
            });
        </script>

    @endsection
