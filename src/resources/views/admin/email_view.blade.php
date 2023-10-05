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
      <button type="button" class="close" data-dismiss="alert">
        x
      </button>
      {{ session()->get('message') }}
    </div>
    @endif
    <form action="{{url('/sendemail',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Greetings</label>
        <input type="text" name="greetings" class="form-control" id="greetings" placeholder="Enter greetings for mail" required>
      </div>
      <div class="form-group">
        <label for="Body">Body</label>
        <input type="text" name="body" class="form-control" id="body" placeholder="Enter body text" required>
      </div>
      <div class="form-group">
        <label for="RoomNo">Action text</label>
        <input type="text" name="actiontext" class="form-control" id="actiontext" placeholder="Enter action text" required>
      </div>
      <div class="form-group">
        <label for="RoomNo">Action Url</label>
        <input type="text" name="actionurl" class="form-control" id="actionurl" placeholder="Enter action url" required>
      </div>
      <div class="form-group">
        <label for="RoomNo">End</label>
        <input type="text" name="endpart" class="form-control" id="endpart" placeholder="Enter end part for mail" required>
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