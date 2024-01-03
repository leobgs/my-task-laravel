<!-- resources/views/tasks/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Task Details</h2>

        <div>
            <strong>Title:</strong> {{ $task->title }}
        </div>
        <div>
            <strong>Description:</strong> {{ $task->description }}
        </div>
        <div>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary mt-3">Back to List</a>
        </div>
    </div>
@endsection
