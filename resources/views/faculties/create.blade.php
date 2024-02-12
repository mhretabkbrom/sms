@extends('main')

@section('title', '| Create New Faculty')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('route' => 'faculties.store', 'method' => 'POST', 'data-parsley-validate'=>'')) }}
            
            {{ Form::label('FacultyName', 'Faculty Name') }}
            {{ Form::text('FacultyName', null, array('class' => 'form-control', 'style' => 'border:2px solid green;', 'required'=>'')) }}
            

            {{ Form::submit('Create Faculty Name', array('class' => 'btn btn-success btn-lg btn-block', 
                'style' => 'margin-top:10px;border:2px solid green;')) }}
            <br>
            <div class="row">
             <div class="col-md-4 ">   
            <a href="{{route('faculties.index')}}" class="btn btn-primary btn-block"> Go to list</a>
            </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection