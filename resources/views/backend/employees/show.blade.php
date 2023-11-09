@extends('backend.employees.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Employee Details are Here</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <h4 style="font-weight:bold;color:brown;">Employee Personal details</h4>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee ID:</strong>
                {{ $employee->emp_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Name:</strong>
                {{ $employee->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Father's Name:</strong>
                {{ $employee->fname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Birth:</strong>
                {{ $employee->dob }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $employee->gender }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number:</strong>
                {{ $employee->number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Address:</strong>
                {{ $employee->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Local address:</strong>
                {{ $employee->laddress }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permanant Address:</strong>
                {{ $employee->paddress }}
            </div>
        </div>
        
       
        <h4 style="font-weight:bold;color:brown;">Company details</h4>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $employee->dept }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Designation:</strong>
                {{ $employee->designation }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Joining:</strong>
                {{ $employee->date_join }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Joining Salary:</strong>
                {{ $employee->salary }}
            </div>
        </div>
</div>
<div class="row">
        
        <h4 style="font-weight:bold;color:brown;">Bank Account details</h4>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Holder Name:</strong>
                {{ $employee->hname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Account Number:</strong>
                {{ $employee->acnumber }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bank Name:</strong>
                {{ $employee->bname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IFSC Code:</strong>
                {{ $employee->ifsc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PAN Number:</strong>
                {{ $employee->pan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Branch:</strong>
                {{ $employee->branch }}
            </div>
        </div>
        
</div>
    </div>
@endsection