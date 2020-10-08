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
          <h4 class="card-title">Merchant Profile</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form" action="{{route('merchant.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="_method" value="PUT" />
              <div class="form-body">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Business Name</label>
                      <input type="text" class="form-control" name="merchant_name" readonly="readonly" value={{$merchant->merchant_name}}>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Area</label>
                      <input type="text" class="form-control" name="merchant_area" readonly="readonly" value={{$merchant->merchant_area}}>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" name="merchant_address" readonly="readonly" value={{$merchant->merchant_address}}>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Telephone</label>
                      <input type="text" class="form-control" name="merchant_tel" value={{$merchant->merchant_tel}}>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Mobile</label>
                      <input type="text" class="form-control" name="merchant_mob" value={{$merchant->merchant_mob}}>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Location (Google Map Link)</label>
                      <input type="text" class="form-control" name="merchant_location" value={{$merchant->merchant_location}}>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Instagram Account</label>
                      <input type="text" class="form-control" name="merchant_instgram" value={{$merchant->merchant_instgram}}>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Whatsapp Number</label>
                      <input type="text" class="form-control" name="merchant_whatsapp" value={{$merchant->merchant_whatsapp}}>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" class="form-control" name="merchant_email"  readonly="readonly" value={{$merchant->merchant_email}}>
                    </div>
                  </div>




                  <div class="col-md-6 col-12">
                  
                    <img style=" display: block; margin-left: auto;margin-right: auto;" src="{{ $merchant->merchant_logo }}" alt="" height="165px" width="165px">
                   
                    <div class="form-group">
                      <label>Logo</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="merchant_logo" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01" name="merchant_logo">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">

                  <img style=" display: block; margin-left: auto;margin-right: auto;" src="{{ $merchant->merchant_stamp }}" alt="" height="165px" width="165px">


                    <div class="form-group">
                      <label>Stamp</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="merchant_stamp">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-success mr-1 mb-1">Save</button>

                  </div>
                </div>
              </div>
            </form>







          </div>
        </div>
      </div>
      <section class="multiple-validation">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Subscription</h4>
              </div>
              <div class="card-content">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Merchant ID (MID)</label>
                          <input type="text" name="name" class="form-control" readonly="readonly" value="10017740">
                          <div class="help-block"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Expirey date</label>
                          <input type="text" name="email" class="form-control" readonly="readonly" value="00/00/2020">
                          <div class="help-block"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Package</label>
                          <input type="text" name="password" class="form-control" readonly="readonly" value="Advance">
                          <div class="help-block"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>E-Commerce</label>
                          <input type="text" name="con-password" class="form-control" readonly="readonly" value="Active">
                          <div class="help-block"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>Payment</label>
                          <input type="text" name="con-password" class="form-control" readonly="readonly" value="Active">
                          <div class="help-block"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                          <label>POS Device</label>
                          <input type="text" name="con-password" class="form-control" readonly="readonly" value="Active">
                          <div class="help-block"></div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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