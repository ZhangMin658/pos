
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')
@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Request Leave</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Employee</label>
                                          <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                              <option value="-" >Select Employee</option>
	                                        </select>
                                      </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Leave type</label>
                                         <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                              <option value="-" >Annual leave</option>
                                            <option value="-" >Unpaid leave</option>
                                            </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>From</label>
                                        <input type="date" id="city-column" class="form-control" name="city-column">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>To</label>
                                        <input type="date" id="city-column" class="form-control" name="city-column">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Total Days</label>
                                        <input type="email" id="email-id-column" class="form-control" name="email-id-column" disabled>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Status</label>
                                            <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                                <option value="square" data-select2-id="301">Approve</option>
                                              <option value="square" data-select2-id="302">Pending</option>
                                              <option value="square" data-select2-id="303">Canceled</option>
	                                          </select>
                                            </div>
                                      </div>
                                  
                               
                                 
                                  
                                 
                                  



                <div class="col-12">
                                     <button type="submit" class="btn btn-success mr-1 mb-1">Save</button>
                                    
                                    <a href="emp_leave"  class="btn btn-info mr-1 mb-1">Back to List</a>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection
@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
@endsection
