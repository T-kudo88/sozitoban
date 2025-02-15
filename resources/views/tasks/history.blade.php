<!-- resources/views/tasks/history.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>履歴画面</h1>

        <table>
            <thead>
                <tr>
                    <th>作業実施日</th>
                    <th>開始時間</th>
                    <th>終了時間</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($task->histories as $history)
                    <tr>
                        <td>{{ $history->created_at }}</td>
                        <td>{{ $history->completed_at }}</td>
                        <td>{{ $history->remarks }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
