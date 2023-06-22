<div class="container">
  <div class="row">
    <div class="col-md-6 wow fadeIn" data-wow-delay="300ms">
      <h2 class="text-center">Make an Appointment</h2>

      <form class="main-form" method="POST" action="{{url('appointment')}}">
        @csrf
        <div class="form-group">
          <label for="name"><strong>Name</strong><span class="text-danger">*</span></label>
          <input type="text" name="name" class="form-control form-control-sm" placeholder="Full name">
        </div>
        <div class="form-group">
          <label for="email"><strong>Email</strong><span class="text-danger">*</span></label>
          <input type="text" name="email" class="form-control form-control-sm" placeholder="Email address..">
        </div>
        <div class="form-group">
          <label for="date"><strong>Select Date</strong><span class="text-danger">*</span></label>
          <input type="date" name="date" class="form-control form-control-sm">
        </div>
        <div class="form-group">
          <label for="nateacherme"><strong>Select Teacher</strong><span class="text-danger">*</span></label>
          <select name="teacher" id="teacher" class="custom-select custom-select-sm">
            <option value="Select Teacher" selected="selected">Select Teacher :: Department</option>           
            @foreach ($teacher as $teachers)
            <option value="{{$teachers->name}}">{{$teachers->name}}:&nbsp;&nbsp;Department&nbsp;=>&nbsp;&nbsp;{{$teachers->department}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="contact"><strong>Contact</strong><span class="text-danger">*</span></label>
          <input type="text" class="form-control form-control-sm" name="number" placeholder="Number..">
        </div>
        <div class="form-group">
          <label for="message"><strong>Message</strong><span class="text-danger">*</span></label>
          <textarea name="message" id="message" class="form-control form-control-sm" rows="4" placeholder="Enter message.."></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color:green">Submit Request</button>
      </form>
    </div>
    <div class="col-md-6 wow fadeIn" data-wow-delay="300ms">
      <h2 class="text-center">Visitor Registration Form</h2>
      <form action="/visitor" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="name"><strong>Name</strong><span class="text-danger">*</span></label>
          <input type="text" class="form-control form-control-sm" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
          <label for="email"><strong>Email</strong><span class="text-danger">*</span></label>
          <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
          <label for="contact"><strong>Contact No.</strong><span class="text-danger">*</span></label>
          <input type="text" class="form-control form-control-sm" name="contact" id="contact" placeholder="Enter your contact no." value="{{ old('contact') }}" required>
        </div>

        <div class="form-group">
          <label><strong>Transport Type:</strong><span class="text-danger">*</span></label>
          <div class="form-check form-control d-flex justify-content-around">
            <div>
              <input type="radio" name="transport" value="Walk In" id="walk-in" required>
              <label class="form-check-label" for="walk-in">Walk-in</label>
            </div>
            <div>
              <input type="radio" name="transport" value="Vehicle" id="vehicle" required>
              <label class="form-check-label" for="vehicle">Vehicle</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <textarea class="form-control form-control-sm" name="purpose" rows="4" placeholder="Enter purpose of visit/remarks" required>{{ old('purpose') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color:green">Submit Request</button>
      </form>
    </div>
  </div>
</div>

