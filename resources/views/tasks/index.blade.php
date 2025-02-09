@extends('layouts.app')

@section('content')
<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->title }} - {{ $task->start_time }} ~ {{ $task->end_time }}</li>
    @endforeach
</ul>
@endsection
