@extends('layouts.app')

@section('content')
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
@endif
<form action="{{route('dashboard')}}" method="POST">
    @csrf
    <center>
    <div class="container">
        <fieldset style="width: 50%; background-color:black; color:red" class="border p-2"> 
        <legend  class="w-auto">TODOLIST</legend>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tasks</span>
                </div>
                <input type="text"  name="tasks" class="form-control" > 
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Description</span>
                </div>
                <input type="text"  name="description" class="form-control" > 
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Due Date</span>
                </div>
                <input type="date"  name="due" class="form-control" > 
            </div>
            <button class="btn btn-primary" name="add" type="submit">Add Schedule</button>
            <a href="{{route('home')}}" type="button" class="btn btn-danger">Cancel</a>
        </fieldset>
    </div>
    </center>
</form>
@endsection
