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
    <form action="{{url('editTeacher',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="fullName" value="{{$data->name}}" required>
      </div>
      <div class="form-group">
        <label for="Phone">Phone Number</label>
        <input type="tel" name="phone" class="form-control" id="phoneNumber" value="{{$data->phone}}" required>
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <select name="department" id="department" class="form-control" value = "{{$data->department}}" style="border:1px solid;"required>
          <option>{{$data->department}}</option>
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
        <input type="text" name="room" class="form-control" id="roomNumber" placeholder="Enter your room number" value="{{$data->room}}" required>
      </div>
      <div class="form-group">      
        <img src="../{{$data->image}}" style = "height:80px; width:70px;" /><br>
        <label for="image">Upload Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
      </div>
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@include('admin.scripts')
  </body>
</html>