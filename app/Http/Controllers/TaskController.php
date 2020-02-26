<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Task;
use Carbon\Carbon;
use DB;
use Session;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'tasks' => 'required',
            'description' => 'required',
            'due' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/insert')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task([
            'tasks' => $request->get('tasks'),
            'description' => $request->get('description'),
            'due' => Carbon::now()->format('Y-m-d'),
        ]);
        $task->save();
        Session::flash('success','New task is added');

        return redirect('/retrieve');
    } 

    public function insert() {
        return view('/insert');
    }

    public function retrieve() 
    {
        $tasks = DB::select('select * from tasks');
        // dd($tasks);
        return view('home', ['tasks'=>$tasks]);
    }

    public function home() 
    {
        return view('/retrieve');
    }

    public function edit(Request $request) 
    {
        $tasks = Task::find($request->id);
        // dd($tasks);
        return view('edit', compact('tasks'));
    }

    public function update(Request $request)
    {
        $tasks = Task::find($request->id);
        $tasks->tasks = $request->task;
        $tasks->description = $request->description;
        $tasks->due = $request->due;
        $tasks->save();
        return redirect('/retrieve');
    }

}


