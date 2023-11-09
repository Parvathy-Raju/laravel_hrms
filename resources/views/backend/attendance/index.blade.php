@extends('../backend.complaints.layout')
 
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Attendance details</h4>
                    <a href="{{ url('backend/attendances/create')}}" class="btn btn-info float-end">Mark Attendance</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($attendances as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->employee->emp_id}}</td>
                            <td>{{$item->employee->name}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                            <a href="{{ url('backend/attendances/'.$item->id.'/edit')}}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  @endsection

