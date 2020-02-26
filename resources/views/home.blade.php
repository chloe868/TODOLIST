@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lists of Tasks</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table>
                        <tr>
                            <th>Tasks</th>
                            <th>Description</th>
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->tasks}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->due}}</td>
                                <td><button type="button" class="btn btn-primary">Edit</button><br>
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
@endsection