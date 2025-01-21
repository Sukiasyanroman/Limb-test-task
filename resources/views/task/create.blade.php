@extends('layout')
@section('content')
    <div class="container">
        <h1>Create New Task</h1>
        <h3>{{session('message') ?? ''}}</h3>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <label for="title" class="form-label">Name</label>
            <input type="text" name="title" id="title" class="form-control" required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" required>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <select name="user_id" class="form-control" >
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            @error('user_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <select name="project_id" class="form-control" >
                @foreach ($projects as $project)
                    <option value="{{$project->id}}">{{$project->title}}</option>
                @endforeach
            </select>
            @error('project_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn-success">Create Task</button>
        </form>
    </div>
@endsection
