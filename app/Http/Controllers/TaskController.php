<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return response()->json($request->user()->tasks);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);

        $task = $request->user()->tasks()->create($request->all());

        return response()->json($task);
    }

    public function update(Request $request, Task $task)
    {
        
        if ($request->user()->id !== $task->user_id) {
            abort(403, 'Unauthorized action.');

        }

        $request->validate([
            'title' => 'sometimes|string',
            'description' => 'nullable|string',
            'status' => 'in:pending,completed',
            'due_date' => 'nullable|date',
        ]);

        $task->update($request->all());

        return response()->json($task);
    }


    public function destroy(Request $request , Task $task)
    {
        // $this->authorize('delete', $task);
        if ($request->user()->id !== $task->user_id) {
            abort(403, 'Unauthorized action.');
        }
        $task->delete();

        return response()->json(['message' => 'Task deleted']);
    }
}
