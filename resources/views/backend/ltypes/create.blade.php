@extends('backend.ltypes.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Leave Type</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('ltypes.index') }}"> Back</a>
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
   
<form action="{{ url('backend/admin/ltypes/store') }}" method="POST">
    @csrf
  
     <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Leave Type:</strong>
                <input type="text" name="ltype" class="form-control" placeholder="Enter Leave Type">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number of Leaves:</strong>
                <input type="text" name="num_leaves" class="form-control" placeholder="Enter number of leaves">
            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection