@extends('layouts.app')

@section('content')

    <h1>Transactions</h1>


    <div class="col-lg-3">
        <a href="{{route('transactions.create')}}" class="btn btn-info" role="button">New Transaction</a>
    </div>
    <div class="col-lg-9">
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
                    <th>Created</th>
                    <th>Updated</th>
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
                        <td>{{ $transaction->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @endif
    </div>
@stop