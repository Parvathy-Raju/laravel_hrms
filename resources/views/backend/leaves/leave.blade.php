@extends('../backend.departments.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employees Leaves</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-info fw-bold" href="">Back to Home <i class="fa fa-arrow-left"></i></a>
            </div>
            <br/>
           <br/>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Leave Type</th>
            <th>Reason</th>
            <th>Number of days</th>
            <th width="220px">Status</th>
            <th>Action</th>
        </tr>
        @foreach ($leaves as $leave)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $leave->emp_id }}</td>
            <td>{{ $leave->name }}</td>
            <td>{{ $leave->email }}</td>
            <td>{{ $leave->date }}</td>
            <td>{{ $leave->type }}</td>
            <td>{{ $leave->reason }}</td>
            <td>{{ $leave->num_leave }}</td>
            <td>
               
            <a href="{{route('sent',$leave->email)}}" class="btn btn-danger">Rejected</a>
            <a href="{{route('approved',$leave->email)}}" class="btn btn-success">Approved</a>

</td>
<td>
          
            <form action="{{ route('leave.destroy',$leave->id) }}" method="POST">
   
   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
            </td>
   
 

        </tr>
        @endforeach
      
    </table>
  
    {!! $leaves->links() !!}
      
@endsection