@include('admin.layout.headers')

    <div class="container-scroller">
@include('admin.layout.sidebar')
      
@include('admin.layout.navbar')

  <div class="container-fluid page-body-wrapper">
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Form Design</title>
</head>

<body>
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
        <label for="RoomNo">Email</label>
        <input type="email" name="email" class="form-control" id="emali" placeholder="Enter your room Email" required>
      </div>
      <div class="form-group">
        <label for="Phone">Phone Number</label>
        <input type="tel" name="phone" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <select name="department" id="department" class="form-control" required>
          <option>Select</option>
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
        <input type="text" name="room" class="form-control" id="roomNumber" placeholder="Enter your room number" required>
      </div>
      <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@include('admin.scripts')
  </body>
</html>