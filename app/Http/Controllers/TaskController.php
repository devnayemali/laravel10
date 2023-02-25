<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('user')->get();
        return view('admin.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $users = User::pluck('name', 'id');
        
        return view('admin.task.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request)
    {
        Task::create($request->all());
        session()->flash('message', 'Task Created Succefully');
        return redirect()->route('task');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::with('user')->findOrFail($id);
        return view('admin.task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $users = User::pluck('name', 'id');
        $task = Task::findOrFail($id);
        return view('admin.task.edit', compact('users', 'task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $task = $request->all($id);
        // $task->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
