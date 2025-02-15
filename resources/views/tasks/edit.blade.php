<!-- resources/views/tasks/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>編集画面</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">担当者名</label>
                <input type="text" name="name" id="name" value="{{ $task->user->name }}" required>
            </div>
            <div>
                <label for="area">担当原</label>
                <input type="text" name="area" id="area" value="{{ $task->area }}" required>
            </div>
            <div>
                <label for="description">説明</label>
                <textarea name="description" id="description">{{ $task->description }}</textarea>
            </div>

            <button type="submit">更新</button>
        </form>
    </div>
@endsection
