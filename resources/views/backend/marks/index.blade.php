@extends('../backend.marks.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>mark Employee Attendance</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-info fw-bold" href="{{ url('backend/admin') }}">Back to Home <i class="fa fa-arrow-left"></i></a>
            </div>
            <br/>
            <div class="pull-right">
            
                <a class="btn btn-success" href="{{ route('marks.create') }}"> Mark Attendance  <i class="fa fa-plus"></i></a>
            </div><br/>
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
            <th>Date</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($marks as $mark)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mark->emp_id }}</td>
            <td>{{ $mark->name }}</td>
            <td>{{ $mark->date }}</td>
            <td>{{ $mark->status }}</td>
            <td>
            <form action="{{ route('marks.destroy',$mark->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('marks.show',$mark->id) }}">Show</a>

   <a class="btn btn-primary" href="{{ route('marks.edit',$mark->id) }}">Edit</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
            </td>
        </tr>
        @endforeach
    </table>
   
    {!! $marks->links() !!}
      
@endsection