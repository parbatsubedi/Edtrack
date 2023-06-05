<base href="/public">
@include('admin.layout.headers')

<style>
.container-fluid {
    padding: 20px;
}

.card {
    border: none;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.image-container {
    position: relative;
    width: 180px;
    height: 180px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.image-container::before {
    content: "";
    display: block;
    padding-top: 100%;
}

.image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-details {
    padding: 20px;
}

.profile-details h5 {
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 24px;
    font-weight: bold;
}

.profile-details p {
    margin-bottom: 10px;
}

.btn-primary {
    background-color: #4CAF50;
    border-color: #4CAF50;
}

.btn-primary:hover {
    background-color: #45a049;
    border-color: #45a049;
}

.edit-profile-button {
    text-align: center;
    margin-top: 30px;
}

.edit-profile-button a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #FF5722;
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 30px;
    transition: background-color 0.3s ease;
}

.edit-profile-button a:hover {
    background-color: #F4511E;
}

@media (max-width: 576px) {
    .container-fluid {
        padding: 10px;
    }

    .card {
        margin-bottom: 20px;
    }

    .image-container {
        width: 150px;
        height: 150px;
    }

    .profile-details h5 {
        font-size: 20px;
    }
}
</style>

<div class="container-scroller">
    @include('admin.layout.sidebar')
        
    @include('admin.layout.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="container py-4">
            <div class="d-flex align-items-center justify-content-center mb-4">
                <h2 class="text-center font-weight-bold">Teacher Details</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <div class="image-container">
                                <img src="{{$data->image}}" alt="avatar" class="rounded-circle img-fluid">
                            </div>
                            <h5 class="my-3">{{$data->name}}</h5>
                            <p class="text-muted">{{$data->phone}}</p>
                            <div class="edit-profile-button">
                                <a href="{{url('update',$data->id)}}" class="btn btn-primary">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body profile-details">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="font-weight-bold mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{$data->name}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="font-weight-bold mb-0">Phone</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">+977 {{$data->phone}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="font-weight-bold mb-0">Department</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{$data->department}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layout.footer')
</div>
