@extends('main')

@section('title', '| Create New Faculty')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        {{ Form::open(['route' => ['departments.store'], 'method'=>'POST']) }}
        {{ Form::label('Name', 'DepartmentName') }}
        {{ Form::text('Name', null, ['class' => 'form-control', 'style' => 'border: 2px solid green;']) }}
        {{ Form::label('Faculty_id', 'Faculty id') }}
        <select class="form-control" name="Faculty_id">
            @foreach($faculties as $faculty)
                <option value="{{ $faculty->Faculty_id}}">{{ $faculty->FacultyName }}</option>
            @endforeach
        </select>
        {{ Form::submit('Create New Department', ['class' => 'btn btn-success btn-lg btn-block', 
        'style' => 'margin-top:10px;margin-bottom:10px;border:2px solid green;']) }}
        {{ Form::close() }}
        <div class="row">
            <div class="col-md-4 ">   
                <a href="{{route('departments.index')}}" class="btn btn-primary btn-block"> Go to list</a>
           </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection