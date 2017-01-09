@extends('admin.layouts.admin')

@section('content')

    <div class="header">
        <h2>All <strong>Transactions</strong></h2>
        <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
                <li><a href="dashboard.html">Make</a>
                </li>
                <li><a href="tables.html">Tables</a>
                </li>
                <li class="active">Tables Dynamic</li>
            </ol>
        </div>
    </div>

    @if($transactions)

        <div class="row">
            <div class="col-lg-12 portlets ui-sortable">
                <div class="panel">
                    <div class="panel-header md-panel-controls ui-sortable-handle">
                        <h3><i class="fa fa-table"></i> <strong>Export Tools</strong> options <small>export to Excel, CSV, PDF or Print.</small></h3>
                        <div class="control-btn"><a href="#" class="panel-reload hidden"><i class="mdi-av-replay"></i></a><a class="hidden" id="dropdownMenu1" data-toggle="dropdown"><i class="mdi-action-settings"></i></a><ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1"><li><a href="#">Action</a></li><li><a href="#">Another action</a></li><li><a href="#">Something else here</a></li></ul><a href="#" class="panel-popout hidden tt" title="Pop Out/In"><i class="mdi-action-open-in-browser"></i></a><a href="#" class="panel-maximize hidden"><i class="mdi-action-launch"></i></a><a href="#" class="panel-toggle"><i class="mdi-navigation-expand-more"></i></a><a href="#" class="panel-close"><i class="mdi-action-delete"></i></a></div></div>
                    <div class="panel-content pagination2 table-responsive">
                        <div class="filter-left">
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-md-6"><div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label></div></div><div class="col-md-6"><div class="dt-buttons"><a class="dt-button buttons-excel buttons-html5 btn btn-default" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>Excel</span></a><a class="dt-button buttons-pdf buttons-html5 btn btn-default" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>PDF</span></a><a class="dt-button buttons-csv buttons-html5 btn btn-default" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>CSV</span></a><a class="dt-button buttons-copy buttons-html5 btn btn-default" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>Copy</span></a></div></div></div>
                                <table class="table table-hover table-dynamic table-tools dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 50px;">ID</th>

                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 80px;">Meter Number</th>

                                        <th class="hidden-350 sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">User</th>

                                        <th class="hidden-350 sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">Amount</th>

                                        <th class="hidden-1024 sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Token</th>

                                        <th class="hidden-480 sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">Units</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($transactions as $transaction)

                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $transaction->id }}</td>
                                            <td class="hidden-350">{{ $transaction->meter_number }}</td>
                                            <td class="hidden-1024">{{ $transaction->amount }}</td>
                                            <td class="hidden-1024">{{ $transaction->amount }}</td>
                                            <td class="hidden-480">{{ $transaction->token }}</td>
                                            <td class="hidden-480">{{ $transaction->units }}</td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                                @endif
                                <div class="row"><div class="col-md-6"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 18 entries</div></div><div class="spcol-md-6an6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_1_previous"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="DataTables_Table_1_next"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop