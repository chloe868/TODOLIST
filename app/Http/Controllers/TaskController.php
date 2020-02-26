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

        return redirect('/home');
    } 

    public function insert() {
        return view('/insert');
    }

    // public function getData(Request $request,$id ){
    //     $task = Task::where('subject_id',$id)->get();
    //     //return $task;
    //     if(count($task) == 0){
    //        return view('tasks',['task' =>'','subject_id' => $id]);
    //     }
    //    return view('tasks',['task' =>$task,'subject_id' => $task[0]->subject_id]);
        
    // }

    public function retrieve() 
    {
        $tasks = DB::select('select * from tasks');
        return view('home', ['tasks'=>$tasks]);
    }

}


