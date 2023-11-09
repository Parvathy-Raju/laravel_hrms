@extends('../backend.complaints.layout')
 
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Attendance</h4>
                    <a href="{{ url('backend/attendances')}}" class="btn btn-primary float-end"><i class="fa fa-arrow-left"></i>    Back</a>
                </div>
                <div class="card-body">
                    <form action="{{url('backend/attendances')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Select Employee ID</label>
                        <select name="emp_id" id="" class="form-control">
                            @foreach($employees as $item)
                                <option value="{{$item->id}}">{{$item->emp_id}}</option>

                            @endforeach
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label>
                            <select name="status" class="form-control">
                                <option name="status" value="Present">Present</option>
                                <option name="status" value="Late">Late</option>
                                <option name="status" value="Absent">Absent</option>
                                <option name="status" value="Half Day">Half Day</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 @endsection

