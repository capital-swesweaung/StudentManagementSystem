@extends('layouts.app')

@section('content')
<div class="pull-left">
                <h2 style="margin-left:30%;">Student Management System</h2>
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">    
        </div>            
            <div class="pull-right" style="margin-left: 60%;">            
                <a href="student-csv" target="_blank" style="background-color:darkblue;" class="btn btn-primary me-1">Export Data</a>           
                <button type="button" class="btn btn-success" style="background-color:#ED8C17;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Import Data
                    </button> 
                    <a class="btn btn-success" href="{{ route('student.create') }}" style="background-color:#A8BF3E;"> Create New Student</a>                               
            </div>
        </div>
    </div>

    <!-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    @endif
    
<div class="container">
<table class="table table-bordered" >
        <tr>
            <th>No</th>
            <th>StudentName</th>
            <th>Age</th>
            <th>Course</th>
            <th>Fee</th>
            <th width="280px">Action</th>
        </tr>
                       
        @foreach ($students as $student)        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->fee }}</td>
            <td>           
              <form action="{{ route('student.destroy',$student->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('student.show',$student->id) }}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('student.edit',$student->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach        
    </table>

        <div class="text-center" style="margin-left:30%;">
        {{ $students->links() }}
        </div>       
</div>
     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="student-import" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


@endsection