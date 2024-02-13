@extends('main')
@section('title', '| Register')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-2">
        {!! Form::open() !!}

        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}

        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}

        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

        {!! Form::submit('Register', ['class' => 'btn btn-primary btn-lg btn-block']) !!}

        {!! Form::close() !!}
    </div>
    <div class="col-md-6 col-md-offset-2">
        <div class="social-auth-links text-center">
            Already have an account? <a href="{{url('auth/login')}}">Sign In</a>
        </div>
    </div>
</div>
@endsection