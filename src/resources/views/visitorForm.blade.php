
  {{--  <div class="container mt-5">
    <h3 class="mb-3">Visitor Registration Form</h3>
    <form action="/visitor" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="name"><strong>Name</strong><span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"
          value="{{ old('name') }}" required>
      </div>

      <div class="form-group">
        <label for="email"><strong>Email</strong><span class="text-danger">*</span></label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
          value="{{ old('email') }}" required>
      </div>

      <div class="form-group">
        <label for="contact"><strong>Contact No.</strong><span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your contact no."
          value="{{ old('contact') }}" required>
      </div>

      <div class="form-group">
        <label><strong>Transport Type:</strong><span class="text-danger">*</span></label>
        <div class="form-check">
          <input type="radio" name="transport" value="Walk In" id="walk-in" required>
          <label class="form-check-label" for="walk-in">Walk-in</label>
        </div>
        <div class="form-check">
          <input type="radio" name="transport" value="Vehicle" id="vehicle" required>
          <label class="form-check-label" for="vehicle">Vehicle</label>
        </div>
      </div>

      <div class="form-group">
        <label for="purpose"><strong>Purpose of visit</strong><span class="text-danger">*</span></label>
        <textarea class="form-control" name="purpose" id="purpose" rows="3"
          placeholder="Enter purpose of visit/remarks" required>{{ old('purpose') }}</textarea>
      </div>

      <button type="submit" name="send" class="btn btn-primary mt-3 col-12 col-sm-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-send-fill" viewBox="0 0 16 16">
          <path
            d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
        </svg>
        Submit
      </button>
    </form>
  </div>  --}}
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h3 class="mb-3">Visitor Registration Form</h3>
        <form action="/visitor" method="post" enctype="multipart/form-data">
          @csrf
  
          <div class="form-group">
            <label for="name"><strong>Name</strong><span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}" required>
          </div>
  
          <div class="form-group">
            <label for="email"><strong>Email</strong><span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
          </div>
  
          <div class="form-group">
            <label for="contact"><strong>Contact No.</strong><span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your contact no." value="{{ old('contact') }}" required>
          </div>
  
          <div class="form-group">
            <label><strong>Transport Type:</strong><span class="text-danger">*</span></label>
            <div class="form-check">
              <input type="radio" name="transport" value="Walk In" id="walk-in" required>
              <label class="form-check-label" for="walk-in">Walk-in</label>
            </div>
            <div class="form-check">
              <input type="radio" name="transport" value="Vehicle" id="vehicle" required>
              <label class="form-check-label" for="vehicle">Vehicle</label>
            </div>
          </div>
  
          <div class="form-group">
            <label for="purpose"><strong>Purpose of visit</strong><span class="text-danger">*</span></label>
            <textarea class="form-control" name="purpose" id="purpose" rows="3" placeholder="Enter purpose of visit/remarks" required>{{ old('purpose') }}</textarea>
          </div>
  
          <button type="submit" name="send" class="btn btn-primary mt-3 col-12 col-sm-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
              <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
            </svg>
            Submit
          </button>
        </form>
      </div>

  {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  --}}
{{--  </body>

</html>  --}}
