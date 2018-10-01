@extends('layouts.master')
@section('content')

    <form action="/login" method="post">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ strlen($username) > 0 ? 'Welcome back!' : 'Log in' }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-1">
                <input type="text" class="form-control" name="username" value="{{ $username }}">
                <label for="username">Username </label>
            </div>
            <div class="col-md-6 col-xs-1">
                <input type="password" class="form-control" name="password">
                <label for="password">Password </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Log In</button>
            </div>
        </div>
        {{ csrf_field() }}
    </form>

@endsection