@extends('layouts.app')

@section('content')
<form action="{{url('update')}}" method="POST">
    @csrf
    <div class="container">
        <fieldset style="height: 60%">
            <h1>TODO</h1>
            <br>
            <input name="id" type="hidden" value="{{$tasks->id}}">
            <label>Tasks </label>
            <input class="input" name="task" type="text" value="{{$tasks->tasks}}" required><br><br>
            <label>Description </label>
            <input class="input" name="description" type="text" value="{{$tasks->description}}" required><br><br>
            <label>Date </label>
            <input class="input" name="due" type="date" value="{{$tasks->due}}" required><br><br>
            <button class="btn btn-primary" name="update" type="submit"  >Update</button>
            <a href="{{route('retrieve')}}"  type="button" class="btn btn-danger">Cancel</a>
        </fieldset>
    </div>
    </form>
    @endsection
    <!-- <div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">Register</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf
                    <div class="input-group form-group">
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input-group form-group">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" placeholder="Email" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-group form-group">
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-group form-group">
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm Password" required autofocus>
                    </div>

                    <div class="col-md-15 offset-md-1">
                        <a href="/login/user">Already have an account.</button>&nbsp;&nbsp;&nbsp;
                        </a><button type="submit" class="btn register_btn">
                            Register
                    </div>

                </form>
            </div>
        </div>
    </div>
</div> -->