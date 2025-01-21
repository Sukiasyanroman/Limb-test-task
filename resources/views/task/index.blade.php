@extends('layout')
@section('content')
    <div class="container">
        <h1>Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="btn-primary">Create New Task</a>

        @if($tasks->isEmpty())
            <p>No tasks found.</p>
        @else
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>User</th>
                    <th>Project</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->user->name }}</td>
                        <td>{{ $task->project->title }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
