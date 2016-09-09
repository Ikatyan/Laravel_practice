@extends('layouts.master')

@section('title')
    welcome!
    @endsection
@section('content')
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ 'signup' }}" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Your E-Mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name">Your First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Your Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group">
                    <label for="email">Your E-Mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{Request::old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>

        </div>
    </div>
    @endsection

