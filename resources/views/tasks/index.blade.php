@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    @if($tasks->isEmpty())
        <p>No tasks available.</p>
    @else
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->title }} - {{ $task->start_time }} ~ {{ $task->end_time }}</li>
            @endforeach
        </ul>
    @endif
@endsection
