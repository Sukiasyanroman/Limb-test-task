{{-- resources/views/users/create.blade.php --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }

    </style>
</head>
<body>
</body>
</html>
@extends('layout')
@section('content')
    <div class="container">
        <h1>Create New User</h1>
        <h3>{{session('message') ?? ''}}</h3>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn-success">Create User</button>
        </form>
    </div>
@endsection
