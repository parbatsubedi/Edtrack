{{--  <!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.headers')
<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
  </head>
  </head>
  <body>

    <div class="container-scroller">
<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      
@include('admin.navbar')

<div class="container-fluid page-body-wrapper">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Form Example</title>
</head>

<body>
  <div class="container mt-5">
    <h1>Form Example</h1>
    <form>
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department" required>
          <option value="">Select your department</option>
          <option value="finance">Finance</option>
          <option value="hr">Human Resources</option>
          <option value="it">Information Technology</option>
          <option value="marketing">Marketing</option>
        </select>
      </div>
      <div class="form-group">
        <label for="roomNumber">Room Number</label>
        <input type="text" class="form-control" id="roomNumber" placeholder="Enter your room number" required>
      </div>
      <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" class="form-control-file" id="image">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</div>
</div>

@include('admin.scripts')
  </body>
</html>  --}}

@include('admin.layout.headers')

    <div class="container-scroller">
@include('admin.layout.sidebar')
      
@include('admin.layout.navbar')

  <div class="container-fluid page-body-wrapper">
    <div class="container mt-5">
    @if(session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-bs-dismiss="alert">
      x
      </button>
    {{ session()->get('message') }}
  </div>
@endif
        <form action="{{url('/upload_teacher')}}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="fullName" placeholder="Enter your full name" required>
          </div>
          <div class="form-group">
            <label for="Phone">Phone Number</label>
            <input type="tel" name="phone" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
          </div>
          <div class="form-group">
            <label for="department">Department</label>
            <select name="department" id="department" class="form-control" style=" width=200px; color:white" Required="" style ="color:white;background-color:#2A3038;">
              <option >Select </option>
              <option value="HeadOfCampus">Head Of Campus</option>
              <option value="IT">IT Department</option>
              <option value="Science">Science</option>
              <option value="Management">Management</option>
              <option value="Humanities">Humanities</option>
              <option value="Law">Law</option>
            </select>
          </div>
          <div class="form-group">
            <label for="RoomNo">Room Number</label>
            <input type="text" name = "room" class="form-control" id="roomNumber" placeholder="Enter your room number" required>
          </div>
          <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
  </div>
  </div>

@include('admin.scripts')
  </body>
</html>