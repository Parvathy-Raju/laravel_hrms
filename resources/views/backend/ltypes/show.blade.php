@extends('backend.ltypes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Leave Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ltypes.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Leave Type:</strong>
                {{ $ltype->ltype }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number of Leaves:</strong>
                {{ $ltype->num_leaves }}
            </div>
        </div>
      
      
       
    </div>
@endsection