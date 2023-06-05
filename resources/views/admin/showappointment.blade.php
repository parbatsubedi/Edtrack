<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.layout.headers')
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
  <body>

    <div class="container-scroller">
@include('admin.layout.sidebar')
      
@include('admin.layout.navbar')
<div class="container-fluid page-body-wrapper">
<div class="container table-wrapper-scroll-y my-custom-scrollbar">
        <h1 style="text-align:center;color:green;font-size:30px;padding:20px;">
            My Appointment Details
        </h1>
        {{ $data->links() }}       
        <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th scope="col">S. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Number</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                    <th scope="col">Approve</th>
                    <th scope="col">Reject</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($data as $datas)
                <tr style="align:center">
                    <th scope="row">{{$datas->id}}</th>
                    <td>{{$datas->name}}</td>
                    <td>{{$datas->email}}</td>
                    <td>{{$datas->teacher}}</td>
                    <td>{{$datas->date}}</td>
                    <td>{{$datas->number}}</td>
                    <td>{{$datas->message}}</td>
                    <td>{{$datas->status}}</td>
                    <td><a class="btn btn-success"  href="{{url('approved',$datas->id)}}">Approve</a></td>
                    <td><a class="btn btn-danger"  href="{{url('reject',$datas->id)}}">Reject</a></td>
                </tr>   
                @endforeach
            </tbody>
        </table>
        
    </div>

</div>
{{--  @include('admin.main')  --}}
@include('admin.scripts')
  </body>
</html>