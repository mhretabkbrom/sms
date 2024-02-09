@extends('main')
@section('title', 'Edit All')
@section('content')

<div class="row">
    {{ Form::model($semester,['route'=>['semesters.update', $semester->Semester_id], 'method'=>'PUT'])}}
<div class="col-md-8">
    {{ Form::label('semeName', 'Semester Name')}}
    {{ Form::text('semeName', null, ['class'=>'form-control'])}}

    {{ Form::label('year', 'Year')}}
    {{ Form::number('year', null, ['class'=>'form-control'])}}
</div>
<div class="col-md-4">
<div class="well">
    <dl class="dl-horizontal">
      <dt>Created_at</dt>
      <dd>{{ $semester->created_at}}</dd>  
    </dl>


    <dl class="dl-horizontal">
      <dt>Created_at</dt>
      <dd>{{ $semester->created_at}}</dd>  
    </dl>


<hr>
<div class="row">
<div class="col-sm-6">

{{ Html::linkRoute('semesters.show', 'Cancel' , array($semester->Semester_id), array('class'=>'btn btn-danger btn-lg btn-block') )}}

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