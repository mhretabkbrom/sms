@extends('main')
@section('title', '| Login')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-2">
        {!! Form::open() !!}
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
        {!! Form::submit('Login', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
        {!! Form::close() !!}
    </div>
    <div class="col-md-6 col-md-offset-2">
        <div class="social-auth-links text-center">
            Have not you an account? <a href="{{url('auth/register')}}">Sign Up</a>
        </div>
        <div class="social-auth-links text-center">
            <a href="{{ url('/password/reset') }}"></i>Forgot password</a>
        </div>
    </div>
</div>
@endsection