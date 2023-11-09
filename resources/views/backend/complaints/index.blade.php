@extends('../backend.complaints.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee Complaints</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-info fw-bold" href="{{ url('backend/admin') }}">Back to Home <i class="fa fa-arrow-left"></i></a>
            </div>
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
            <th>Employee Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($complaints as $complaint)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $complaint->name }}</td>
            <td>{{ $complaint->email }}</td>
            <td>{{ $complaint->date }}</td>
            <td>{{ $complaint->subject }}</td>
            <td>{{ $complaint->description }}</td>
           
            <td>
        <a href="{{route('send',$complaint->email)}}" class="btn btn-success">Solved</a></td>

            <td>
                <form action="{{ route('complaint.destroy',$complaint->id) }}" method="POST">
   
                
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $complaints->links() !!}
      
@endsection