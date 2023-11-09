@extends('../backend.ltypes.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Leave Type</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-info fw-bold" href="{{ url('backend/admin') }}">Back to Home <i class="fa fa-arrow-left"></i></a>
            </div>
            <br/>
            <div class="pull-right">
            
                <a class="btn btn-success" href="{{ route('ltypes.create') }}"> Add New Leave  <i class="fa fa-plus"></i></a>
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
            <th>Leave</th>
            <th>Number of Leaves</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ltypes as $ltype)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ltype->ltype }}</td>
            <td>{{ $ltype->num_leaves }}</td>
            <td>
                <form action="{{ route('ltypes.destroy',$ltype->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('ltypes.show',$ltype->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('ltypes.edit',$ltype->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $ltypes->links() !!}
      
@endsection