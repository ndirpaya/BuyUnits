@extends('layouts.profile')

@section('content')

    <div class="text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="title">All Transactions</h2>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom: 50px">
        <div class="col-md-4">
            @include('layouts.sidebar')

        </div>


        <div class="col-md-8">

            <!-- Tabs with icons on Card -->
            <div class="card" style="margin-bottom: 20px;">

                <div class="header header-primary text-center" style="height:70px;">
                    <h4>All Transactions</h4>
                </div>
                <div class="content">

                    @if($transactions)

                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Meter Number</th>
                                <th>User</th>
                                <th>Amount</th>
                                <th>Token</th>
                                <th>Units</th>
                                <th>Date</th>
                                {{--<th>Updated</th>--}}
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->meter_number }}</td>
                                    <td>{{ $transaction->user->first_name . ' ' . $transaction->user->last_name }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td>{{ $transaction->token }}</td>
                                    <td>{{ $transaction->units }}</td>
                                    <td>{{ $transaction->created_at }}</td>
{{--                                    <td>{{ $transaction->updated_at }}</td>--}}
                                    <td class="td-actions text-right">
                                        <a href="{{route('transactions.show', $transaction->id)}}">
                                        <button
                                                type="button"
                                                rel="tooltip"
                                                title="View Profile"
                                                class="btn btn-info btn-simple btn-xs"
                                                data-toggle="modal" data-target="#myModal"
                                                data-id="{{$transaction->id}}"
                                                data-title="{{$transaction->meter_number}}"
                                        >
                                            <i class="fa fa-file-o"></i>
                                        </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @endif

                </div>

            </div>

        </div>






@stop

        {{--<!-- Modal Core -->--}}
        {{--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
            {{--<div class="modal-dialog">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
                        {{--<h4 class="modal-title" id="myModalLabel">Modal title</h4>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--{{$transaction->id}}--}}
                        {{--{{$transaction->meter_number}}--}}
                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>--}}
                        {{--<button type="button" class="btn btn-info btn-simple">Save</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

{{--@section('scripts')--}}
        {{--<script>--}}
            {{--$('#myModal').on('show', function(e) {--}}
                {{--var link = e.relatedTarget();--}}

                {{--var id = link.data("id");--}}
                {{--var title = link.data("title");--}}

                {{--var modal = $(this);--}}
                {{--modal.find("#id").val(id);--}}
                {{--modal.find("#title").val(title);--}}
            {{--});--}}
        {{--</script>--}}
    {{----}}
{{--@stop--}}