<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.layout.headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .enlarged-image-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }
        .enlarged-image {
            max-width: 90%;
            max-height: 90%;
        }
        .table-wrapper-scroll-y {
            max-height: 500px;
            overflow-y: auto;
        }
        .table {
            background-color: #fff;
        }
        .table th {
            background-color: #f5f6fa;
            color: #5c5edc;
            font-weight: bold;
        }
        .table td {
            color: #000;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
  </head>
  <body>

            <div class="container-scroller">
        @include('admin.layout.sidebar')
        @include('admin.layout.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                <h1 class="text-center mt-4">User Details</h1>
                {{ $data->links() }} 
                <table class="table table-striped table-bordered table-sm">
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
                    <th scope="col">Send Mail</th>
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
                    <td><a class="btn btn-primary"  href="{{url('emailview',$datas->id)}}">Send</a></td>
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