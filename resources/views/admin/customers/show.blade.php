@extends('admin.layouts.app')


@section('content')

    <h1>Customer View</h1>

    <div class="col-lg-3"></div>

    <div class="col-lg-9">
        <li>ID: {{ $customer->id }}</li>
        <li>First Name: {{ $customer->first_name }}</li>
        <li>Last Name: {{ $customer->last_name }}</li>
        <li>Email: {{ $customer->email }}</li>
        <li>Created At: {{ $customer->created_at }}</li>
        <li>Updated At: {{ $customer->updated_at }}</li>
    </div>
@stop