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
                <h1 class="text-center mt-4">Teacher Details</h1>
                <table class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th scope="col">S. No.</th>
                            <th scope="col">Teacher Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Department</th>
                            <th scope="col">Room No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                        <tr>
                            <th scope="row">{{$datas->id}}</th>
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->phone}}</td>
                            <td>{{$datas->department}}</td>
                            <td>{{$datas->room}}</td>
                            <td>
                                <img class="enlarge-image" src="{{$datas->image}}" style="height: 50px; width: 50px;">
                            </td>
                            <td>{{$datas->created_at}}</td>
                            <td>{{$datas->updated_at}}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{url('view',$datas->id)}}">View</a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('are you sure to Delete Teacher!!!')" href="{{url('delete',$datas->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var enlargeImages = document.querySelectorAll('.enlarge-image');
                enlargeImages.forEach(function(image) {
                    image.addEventListener('click', function() {
                        var src = this.getAttribute('src');
                        var enlargedImageContainer = document.createElement('div');
                        enlargedImageContainer.className = 'enlarged-image-container';
                        enlargedImageContainer.addEventListener('click', function() {
                            this.remove();
                        });
                        var enlargedImage = document.createElement('img');
                        enlargedImage.className = 'enlarged-image';
                        enlargedImage.src = src;
                        enlargedImageContainer.appendChild(enlargedImage);
                        document.body.appendChild(enlargedImageContainer);
                    });
                });
            });
        </script>

        @include('admin.layout.footer')
    </div>
</body>
</html>
