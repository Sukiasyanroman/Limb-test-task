@extends('layout')
@section('content')
    <div class="container">
        <h1>Create New Project</h1>
        <h3>{{session('message') ?? ''}}</h3>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" required>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <select name="user_ids[]" class="form-control" multiple>

                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            @error('user_ids')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn-success">Create Project</button>
        </form>
    </div>
@endsection
