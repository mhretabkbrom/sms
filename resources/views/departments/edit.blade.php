@extends('main')
@section('title', '|Show Departments')
@section('content')
    <div class="row">
    <div class="col-md-8">
    {{ Form::model($department, ['route' => ['departments.update', $department->Department_id], 'method' => 'PUT']) }}

    {{ Form::label('Name', 'Department Name') }}
    {{ Form::text('Name', null, ['class' => 'form-control', 'style' => 'border:2px solid green;']) }}

 

    
    {{ Form::label('Faculty_id', 'Faculty Name') }}
    {{ Form::select('Faculty_id', $faculties, null, ['class' => 'form-control', 'style' => 'border:2px solid green;']) }}


     </div>
     <div class="col-md-4">
      <div class="well" style="background-color:black;color:white;">
        <dl class="dl-horizontal">
         <dt><strong>Created at:</strong></dt>
         <dd>{{ date('M Y, J h, ia', strtotime($department->created_at))}}</dd>

        </dl>

        <dl class="dl-horizontal">
         <dt><strong>Last Update:</strong></dt>
         <dd>{{ date('M Y, J h, ia', strtotime($department->updated_at))}}</dd>
        </dl>

       <div class="row">

        <hr style="border:2px  solid green;">
       <div class="col-sm-6">
        {{ Html::linkRoute('departments.index', 'Cancel', array($department->Department_id), array('class'=>'btn btn-danger btn-lg btn-block')   
         )}}
       </div>

       <div class="col-sm-6">
       {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-lg btn-block']) }}

        <!--- {{ Html::linkRoute('departments.update', 'SaveChanges', array($department->Department_id),
             array('class'=>'btn btn-success btn-lg btn-block'))}}--->
       </div>

       </div>
      </div> 
      {{ Form::close() }}
 
    </div>
    </div>
@endsection