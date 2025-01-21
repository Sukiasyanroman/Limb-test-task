{{-- resources/views/layout.blade.php --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            font-size: 14px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #f4f4f9;
            color: #555;
        }
        .btn-primary {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
            color: #666;
        }
        form {
            margin-top: 20px;
        }
        .form-label {
            font-weight: bold;
            color: #555;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }
        .text-danger {
            color: #e74c3c;
            font-size: 12px;
        }
        .btn-success {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="navbar">
    <div>
        <a href="{{ route('users.index') }}">Users</a>
        <a href="{{ route('users.create') }}">Create User</a>
        <a href="{{ route('projects.index') }}">Projects</a>
        <a href="{{ route('projects.create') }}">Create Project</a>
        <a href="{{ route('tasks.index') }}">Tasks</a>
        <a href="{{ route('tasks.create') }}">Create Task</a>

    </div>
</div>

<div class="container">
    @yield('content')
</div>

<footer>
    &copy; {{ date('Y') }} My App. All rights reserved.
</footer>
</body>
</html>
