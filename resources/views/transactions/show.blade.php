@extends('layouts.app')

@section('content')

    <h1>Transaction Number: {{$transaction->id}}</h1>


    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <li>ID: {{$transaction->id}}</li>
        <li>METER NUMBER: {{$transaction->meter_number}}</li>
        <li>USER ID: {{ $transaction->user->first_name . ' ' . $transaction->user->last_name }}</li>
        <li>TRANSACTION AMOUNT: {{$transaction->amount}}</li>
        <li>TRANSACTION DATE: {{$transaction->created_at}}</li>
    </div>
@stop