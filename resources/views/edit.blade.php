@extends('layouts.app')

@section('content')
<form action="{{url('update')}}" method="POST">
    @csrf
    <center>
    <div class="container">
        <fieldset style="width: 40%; background-color:black; color:red" class="border p-2"> 
        <legend  class="w-auto">UPDATE</legend>
            <br>
            <div class="input-group mb-3">
                <input type="hidden"  value="{{$tasks->id}}" name="id" class="form-control" > 
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tasks</span>
                </div>
                <input type="text"  value="{{$tasks->tasks}}" name="task" class="form-control" required> 
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Description</span>
                </div>
                <input type="text" value="{{$tasks->description}}" name="description" class="form-control" required> 
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Due Date</span>
                </div>
                <input type="date" value="{{$tasks->due}}" name="due" class="form-control" required> 
            </div>
            <button class="btn btn-primary" name="add" type="submit">Update</button>
            <a href="{{route('home')}}" type="button" class="btn btn-danger">Cancel</a>
        </fieldset>
    </div>
    </center>
    @endsection
 