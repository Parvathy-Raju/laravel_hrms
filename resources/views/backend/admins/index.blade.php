@extends('../backend.admins.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin</h2>
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
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($admins as $admin)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->email }}</td>
            <td>
                <form action="{{ route('admins.destroy',$admin->id) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('admins.show',$admin->id) }}">Show</a>
    
    <a class="btn btn-primary" href="{{ route('admins.edit',$admin->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $admins->links() !!}
      
@endsection