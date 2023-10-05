{{--  @extends('admin.layout.main')

 @section('main-container')  --}}
        <!-- partial -->
        <div class="main-panel">
          {{--  <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                  </div>
                </div>
              </div>
            </div>  --}}
            <div class="container">
              <div class="row justify-content-md-center">
                  <div class="bg-success col-sm rounded-3 m-2 text-white">
                      <div class="m-3">
                          <h5 class="mt-3">Visitors Today - {{ date('d-M-Y') }} </h5>
                          <div>Total :</div>
                          <div>In Premises : </div>
                          <div>Check Out : </div>
                      </div>
                  </div>
                  <div class="bg-warning col-sm rounded-3 m-2 text-white">
                      <div class="m-3">
                          <h5 class="mt-3">Visitors This Month </h5>
                          <div>{{ date('M-Y') }}</div>
                          <div>Total :</div>
                      </div>
                  </div>
                  <div class="bg-primary col-sm rounded-3 m-2 text-white">
                      <div class="m-3">
                          <h5 class="mt-3">Total Visitors To Date {{ date('d-M-Y') }} </h5>
                          <div>Total : </div>
                      </div>
                  </div>
              </div>
          </div>
{{--  @endsection  --}}
            