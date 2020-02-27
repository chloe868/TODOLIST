<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    /** @var Task $task */
    private $task;

    public function __construct(
        Task $task
    ) 
    
    {
        $this->task = $task;
        $this->middleware('auth');
    }

    public function store(TaskRequest $request) 
    {
        $this->task->insert($request->all());
        return redirect('home');
    } 

    public function insert() {
        return view('/insert');
    }

    public function home() 
    {
        $tasks = $this->task->getAll();
        return view('home', compact('tasks'));
    }

    public function edit(Request $request) 
    {
        $tasks = $this->task->find($request->id);
        return view('edit', compact('tasks'));
    }

    public function update(Request $request)
    {
        $tasks = $this->task->find($request->id);
        $tasks->tasks = $request->task;
        $tasks->description = $request->description;
        $tasks->due = $request->due;
        $tasks->save();
        return redirect('home');
    }

    public function delete(Request $request)
    {
        $tasks = $this->task->find($request->id);
        $tasks->delete();
        return redirect()->back();
    }

}