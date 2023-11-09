@extends('../backend.departments.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Departments</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-info fw-bold" href="{{ url('backend/admin') }}">Back to Home <i class="fa fa-arrow-left"></i></a>
            </div>
            <br/>
            <div class="pull-right">
            
                <a class="btn btn-success" href="{{ route('departments.create') }}"> Add New Department  <i class="fa fa-plus"></i></a>
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
            <th>Department Name</th>
            <th>Designation</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($departments as $department)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $department->dept_name }}</td>
            <td>{{ $department->designation }}</td>
            <td>
                <form action="{{ route('departments.destroy',$department->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('departments.show',$department->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('departments.edit',$department->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $departments->links() !!}
      
@endsection