@extends('../backend.profiles.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="fw-bold text-center">My Profile</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-info fw-bold" href="{{ url('backend/admin') }}">Back to Home <i class="fa fa-arrow-left"></i></a>
            </div>
            <br/>
        </div>
    </div>
    <div class="container-fluid text-center">
    <h4 class="fw-bold">Admin Name: <span class="text-danger">{{ Auth::user()->name }}</span></h4>
    <h4 class="fw-bold">Email Address: <span class="text-danger">{{ Auth::user()->email }}</span></h4>
    
  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
@endsection