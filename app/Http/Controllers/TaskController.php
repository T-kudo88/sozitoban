<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        // タスクを取得してビューで表示
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        // バリデーションの追加
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'number' => 'required|string',
            'name' => 'required|string',
            'address' => 'required|email',
            'position' => 'nullable|string',
            'title' => 'required|string', // titleを必須として追加
        ]);

        // タスクを作成して保存
        $task = Task::create($validated);

        return redirect()->route('home');
    }
    public function show(Task $task)
    {
        // 単一のタスクを表示
        return view('tasks.show', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        // タスクの内容を更新
        $task->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(Task $task)
    {
        // タスクを削除
        $task->delete();
        return redirect()->route('home');
    }

    public function create()
    {
        // ユーザーのリストを取得
        $users = User::all();
        // タスク作成フォームを表示し、users変数をビューに渡す
        return view('tasks.create', compact('users'));
    }

    public function edit(Task $task)
    {
        // タスク編集フォームを表示
        return view('tasks.edit', compact('task'));
    }

    public function history(Task $task)
    {
        // タスクの履歴を表示
        return view('tasks.history', compact('task'));
    }
}
