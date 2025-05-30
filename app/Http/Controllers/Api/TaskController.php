<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        return auth()->user()->tasks;
    }

    public function store(Request $request)
    {
        return auth()->user()->tasks()->create($request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]));
    }

    public function show(Task $task)
    {
        $this->authorizeTask($task);
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $this->authorizeTask($task);
        $task->update($request->only('title', 'description', 'is_done'));
        return $task;
    }

    public function destroy(Task $task)
    {
        $this->authorizeTask($task);
        $task->delete();
        return response()->noContent();
    }

    private function authorizeTask(Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403, 'Access denied');
        }
    }
}

