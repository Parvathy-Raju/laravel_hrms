@extends('backend.departments.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Department</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('departments.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ url('backend/admin/departments/store') }}" method="POST">
    @csrf
  
     <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department Name:</strong>
                <input type="text" name="dept_name" class="form-control" placeholder="Enter Department Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Designation:</strong>
                <input type="text" name="designation" class="form-control" placeholder="Enter Designation">
            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection