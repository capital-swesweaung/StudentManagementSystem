@extends('students.layout')
  
@section('content')
    <div class="container">
        <div class="pull-left text-left" >
                    <h2 style="text-align:center;font-style: italic;">Show Student</h2>
        </div>
        <div class="pull-right text-right">
                    <a class="btn btn-primary" href="{{ route('student.list') }}"> Back</a>              
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentName:</strong>
                <input type="text" name="name" value="{{ $student->name }}" class="form-control " readonly> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="text" name="age" value="{{ $student->age }}" class="form-control" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="course" value="{{ $student->course }}" class="form-control" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fee:</strong>
                <input type="text" name="fee" value="{{ $student->fee }}" class="form-control" readonly>
            </div>
        </div>
    </div>
@endsection