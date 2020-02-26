@extends('layouts.app')

@section('content')
<form action="{{route('dashboard')}}" method="POST">
    @csrf
    <div class="container">
        <fieldset style="height: 60%">
            <h1>TODO</h1>
            <br>
            <label>Tasks </label>
            <input class="input" name="tasks" type="text" value="" required><br><br>
            <label>Description </label>
            <input class="input" name="description" type="text" value="" required><br><br>
            <label>Date </label>
            <input class="input" name="due" type="date" value="" required><br><br>
            <button class="btn btn-primary" name="add" type="submit" >Add Schedule</button>
            <a href="{{route('retrieve')}}"  type="button" class="btn btn-danger">Cancel</a>
        </fieldset>
    </div>
    </form>
    @endsection