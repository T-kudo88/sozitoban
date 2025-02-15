<!-- resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>登録画面</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div>
                <label for="user_id">担当者</label>
                <select name="user_id" id="user_id" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="number">社員番号</label>
                <input type="text" name="number" id="number" required>
            </div>
            <div>
                <label for="name">社員名</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="address">メールアドレス</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div>
                <label for="position">役職</label>
                <input type="text" name="position" id="position">
            </div>

            <button type="submit">登録</button>
        </form>
    </div>
@endsection
