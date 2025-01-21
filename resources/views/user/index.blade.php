@extends('layout')
@section('content')
    <div class="container">
        <h1>Users</h1>
        <a href="{{ route('users.create') }}" class="btn-primary">Create New User</a>

        @if($users->isEmpty())
            <p>No users found.</p>
        @else
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
