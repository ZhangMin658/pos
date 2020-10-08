
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
                  <h4 class="card-title">New Supplier</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" action="supplierscontroller" method="POST">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Supplier Name</label>
                                        <input type="text"  class="form-control"  name="supp_name">
                                      </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Telephone Number</label>
                                        <input type="text"  class="form-control" name="supp_tel">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="text"  class="form-control" name="supp_mob">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Address</label>
                                        <input type="text"  class="form-control" name="supp_address" >
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text"  class="form-control" name="supp_email">
                                      </div>
                                  </div>


                                  </div>
                               <div class="col-12">
                                     <button type="submit" class="btn btn-success mr-1 mb-1">Save</button>
                                      <button type="reset" class="btn btn-warning mr-1 mb-1">Clear Entry</button>
                                    <a href="customer_list"  class="btn btn-info mr-1 mb-1">Back to List</a>
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
