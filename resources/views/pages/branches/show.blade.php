
@extends('layouts/contentLayoutMaster')

@section('title', 'View Branch')
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
                  <h4 class="card-title">View Branch</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" method="POST">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Branch</label>
                                        <input type="text"  class="form-control {{ $errors->has('branch_name') ? 'is-invalid' : ''}}"  name="branch_name" value="{{$branch->branch_name}}" disabled>
                                        {!! $errors->first('branch_name', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Area</label>
                                        <input type="text"  class="form-control {{ $errors->has('branch_area') ? 'is-invalid' : ''}}"  name="branch_name" value="{{$branch->branch_area}}" disabled>
                                        {!! $errors->first('branch_area', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control {{ $errors->has('branch_address') ? 'is-invalid' : ''}}" name="branch_address" value="{{$branch->branch_address}}" disabled>
                                        {!! $errors->first('branch_address', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control {{ $errors->has('branch_tel') ? 'is-invalid' : ''}}" name="branch_tel" value="{{$branch->branch_tel}}" disabled>
                                        {!! $errors->first('branch_tel', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control {{ $errors->has('branch_mob') ? 'is-invalid' : ''}}" name="branch_mob" value="{{$branch->branch_mob}}" disabled>
                                        {!! $errors->first('branch_mob', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Location (Google Map Link)</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_location') ? 'is-invalid' : ''}}" name="branch_location" value="{{$branch->branch_location}}" disabled>
                                            {!! $errors->first('branch_location', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Branch Rent (Per Month)</label>
                                        <input type="text" class="form-control {{ $errors->has('branch_rent') ? 'is-invalid' : ''}}" name="branch_rent" value="{{$branch->branch_rent}}" disabled>
                                        {!! $errors->first('branch_rent', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>EWA Account Number</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_ewa_no') ? 'is-invalid' : ''}}" name="branch_ewa_no" value="{{$branch->branch_ewa_no}}" disabled>
                                            {!! $errors->first('branch_ewa_no', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                   <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Municipality (Per Month)</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_municipality') ? 'is-invalid' : ''}}" name="branch_municipality" value="{{$branch->branch_municipality}}" disabled>
                                            {!! $errors->first('branch_municipality', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>VAT Number</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_vat') ? 'is-invalid' : ''}}" name="branch_vat" value="{{$branch->branch_vat}}" disabled>
                                            {!! $errors->first('branch_vat', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                   <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Opening Date</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_opening') ? 'is-invalid' : ''}}" name="branch_opening" value="{{$branch->branch_opening}}" disabled>
                                            {!! $errors->first('branch_opening', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Closing Date</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_closing') ? 'is-invalid' : ''}}" name="branch_closing" value="{{$branch->branch_closing}}" disabled>
                                            {!! $errors->first('branch_closing', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>C.R Number</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_cr_no') ? 'is-invalid' : ''}}" name="branch_cr_no" value="{{$branch->branch_cr_no}}" disabled>
                                            {!! $errors->first('branch_cr_no', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>C.R Expriy Date</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_cr_exp') ? 'is-invalid' : ''}}" name="branch_cr_exp" value="{{$branch->branch_cr_exp}}" disabled>
                                            {!! $errors->first('branch_cr_exp', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                   <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Branch Target per month</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_target') ? 'is-invalid' : ''}}" name="branch_target" value="{{$branch->branch_target}}" disabled>
                                            {!! $errors->first('branch_target', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>





                <div class="col-12">
                                    <a href="{{route('branches.index')}}"  class="btn btn-info mr-1 mb-1">Back to List</a>
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
        <script>
            $("#area").select2().val("{{$branch->branch_area}}").trigger("change");
        </script>
@endsection
