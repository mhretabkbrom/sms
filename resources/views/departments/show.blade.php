@extends('main')
@section('title', '|Show Departments')
@section('content')
    <div class="row">
    <div class="col-md-8">
     <h5><strong>FacultyName</strong>:{{ $department->Name }}</h5>
            @if ($department->faculty)
                <p><strong>DepartmentName</strong>:{{ $department->faculty->FacultyName }}</p>
            @endif
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
        {{ Html::linkRoute('departments.edit', 'Edit', array($department->Department_id), array('class'=>'btn btn-primary btn-lg btn-block')   
         )}}
       </div>

       <div class="col-sm-6">
        {{ Form::open(['route'=>['departments.destroy',$department->Department_id], 'method'=>'DELETE'])}}
        <!--{{ Html::linkRoute('departments.destroy', 'Delete', array($department->Department_id),
           array('class'=>'btn btn-danger btn-lg btn-block'))}}--->
           {{ Form::submit('Delete',['class'=>'btn btn-danger btn-lg btn-block'])}}
     
       {{ Form::close()}}
      </div>
       </div>
      </div>  
    </div>
    </div>
@endsection