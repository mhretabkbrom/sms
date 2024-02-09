@extends('main')
@section('title','Title')
@section('content')
<div class="row">
<div class="col-md-9">
<hr>
</div>
<div class="col-md-3">
<a href="{{route('grades.create')}}" class="btn btn-success btn-lg btn-block">Create New Student</a>
</div>
<div class="col-md-12">
    <hr>
</div>
</div>
<div class="row">
<div class="col-md-12">
 <table class="tables">
    <tead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date Of Birth</th>
            <th>Department Id</th>
            <th>Course Number</th>
            <th>Course Title</th>
            <th>Cradit Hour</th>
            <th>Semester Name</th>
            <th>Year</th>
            <th>Mark</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($grades as $grade)
       <tr>
        <th>{{ $grade->Grade_id}}</th>
        <td>{{ $grade->student->Fname}}</td>
        <td>{{ $grade->student->Mname}}</td>
        <td>{{ $grade->student->Lname}}</td>
        <td>{{ substr($grade->student->email,0,5)}}{{ strlen($grade->student->email) > 5 ?"...":""}}</td>
        <td>{{ $grade->student->date_of_birth}}</td>
        <td>{{ $grade->student->Department_id}}</td>
        <td>{{ $grade->course->cono}}</td>
        <td>{{ $grade->course->costitle}}</td>
        <td>{{ $grade->course->CH}}</td>
        <td>{{ $grade->semester->semeName}}</td>
        <td>{{ $grade->semester->year}}</td>
        <td>{{ $grade->Mark}}</td>
        <td><a href="{{route('grades.show', $grade->Grade_id)}}" class="btn btn-success btn-lg btn-block">View</a
        ><a href="{{route('grades.edit', $grade->Grade_id)}}" class="btn btn-success btn-lg btn-block">Edit</a></td>



       </tr>
       @endforeach

    </tbody>
 </table>   



 </div>   


</div>


@endsection