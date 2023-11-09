@extends('backend.marks.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Leave Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('marks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee ID:</strong>
                {{ $mark->emp_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Name:</strong>
                {{ $mark->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $mark->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $mark->status }}
            </div>
        </div>
      
      
       
    </div>
@endsection