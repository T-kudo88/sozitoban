<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ホーム画面</h1>

        <table>
            <thead>
                <tr>
                    <th>担当者</th>
                    <th>担当原</th>
                    <th>削除方法</th>
                    <th>使う道具</th>
                </tr>
            </thead>
            <tbody>
                <!-- データは後でDBから取得して表示 -->
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->user->name }}</td>
                        <td>{{ $task->area }}</td>
                        <td>{{ $task->completed ? '完了' : '未完了' }}</td>
                        <td>{{ $task->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('tasks.create') }}">登録</a>
        <a href="{{ route('tasks.edit') }}">編集</a>
    </div>
@endsections
