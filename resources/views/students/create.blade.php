@extends('students.layout')

@section('content')
<div class="container">
<div class="pull-left text-left" >
                <h2 style="text-align:center;font-style: italic;">Add New Student</h2>
    </div>
    <div class="pull-right text-right">
                <a class="btn btn-primary" href="{{ route('student.list') }}"> Back</a>
                <form action="student-logout" method="POST">
                        @csrf
                        <button class="btn btn-link" type="submit">Logout</button>
                    </form>    
            </div>
</div>
<form action="{{ route('student.store') }}" method="POST">
    @csrf  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentName:</strong>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" placeholder="Enter Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color:red;">{{ $message }}</strong>
                             </span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="Enter Age">
                @error('age')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color:red;">{{ $message }}</strong>
                             </span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="course" class="form-control @error('course') is-invalid @enderror" placeholder="Enter Course">
                @error('course')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color:red;">{{ $message }}</strong>
                             </span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fee:</strong>
                <input type="text" name="fee" class="form-control @error('fee') is-invalid @enderror" placeholder="Enter Fee">
                @error('fee')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color:red;">{{ $message }}</strong>
                             </span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection