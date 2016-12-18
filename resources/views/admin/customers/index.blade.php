@extends('layouts.app')

@section('content')

    <h1>Customers</h1>

    <div class="col-lg-3"></div>

    <div class="col-lg-9">
        @if($customers)

            <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                      <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->created_at }}</td>
                        <td>{{ $customer->updated_at }}</td>
                      </tr>
                    @endforeach
                </tbody>
            </table>

        @endif
    </div>

@stop