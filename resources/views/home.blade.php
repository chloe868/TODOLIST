@extends('layouts.app')

@section('content')
<center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Lists of Tasks</b></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-hover table-dark">
                        <tr>
                            <th scope="col">Tasks</th>
                            <th scope="col">Description</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->tasks}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->due}}</td>
                                <td><a href="{{url('edit/'.$task->id)}}" type="button" class="btn btn-primary" >Edit</a>&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- ------Button to Add------- -->
                    <a href="{{url('/insert')}}" type="button" class="btn btn-primary">Add Tasks</a>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
@endsection