@extends('layouts.app')

@section('content')

    <h1>Admin Users</h1>

    <div class="col-lg-3">
        <a href="{{route('users.create')}}" class="btn btn-info" role="button">New User</a>
    </div>
    <div class="col-lg-9">
        @if($users)

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    {{--<th>Status</th>--}}
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
{{--                        <td>{{ $user->status->name }}</td>--}}
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @endif
    </div>


@stop