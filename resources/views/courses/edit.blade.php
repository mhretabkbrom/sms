@extends('main')
@section('title', 'Edit All')
@section('content')

<div class="row">
    {{ Form::model($course,['route'=>['courses.update', $course->Course_id], 'method'=>'PUT'])}}
<div class="col-md-8">
    {{ Form::label('cono', 'Courses Number')}}
    {{ Form::text('cono', null, ['class'=>'form-control'])}}

    {{ Form::label('costitle', 'Corse Title')}}
    {{ Form::text('costitle', null, ['class'=>'form-control'])}}

    {{ Form::label('CH', 'C H')}}
    {{ Form::number('CH', null, ['class'=>'form-control'])}}
</div>
<div class="col-md-4">
<div class="well">
    <dl class="dl-horizontal">
      <dt>Created_at</dt>
      <dd>{{ $course->created_at}}</dd>  
    </dl>


    <dl class="dl-horizontal">
      <dt>Created_at</dt>
      <dd>{{ $course->created_at}}</dd>  
    </dl>


<hr>
<div class="row">
<div class="col-sm-6">

{{ Html::linkRoute('courses.show', 'Cancel' , array($course->Course_id), array('class'=>'btn btn-danger btn-lg btn-block') )}}

</div>

<div class="col-sm-6">
{{ Form::submit( 'SaveChanges' , ['class'=>'btn btn-success btn-lg btn-block'])}}

</div>
</div>

 


</div>   
</div>

{{ Form::close() }}
</div>
@endsection