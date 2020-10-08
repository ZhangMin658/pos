@extends('layouts/contentLayoutMaster')

@section('title', 'Invoice')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/invoice.css')) }}">
@endsection
@section('content')
<!-- invoice functionality start -->
<section class="invoice-print mb-1">
    <div class="row">
      <fieldset class="col-12 col-md-5 mb-1 mb-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Email" aria-describedby="button-addon2">
          <div class="input-group-append" id="button-addon2">
            <button class="btn btn-outline-primary" type="button">Send</button>
          </div>
        </div>
      </fieldset>
      <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
        <a href="sales_installment_view"><button class="btn btn-primary  ml-0 ml-md-1"> <i class="feather icon-file-text"></i> View Installment</button></a>
        <button class="btn btn-primary btn-print ml-0 ml-md-1"> <i class="fas fa-print"></i> Print A4</button>
        <button class="btn btn-outline-primary  ml-0 ml-md-1"> <i class="feather icon-download"></i> Download</button>
      </div>
    </div>
  </section>
  <!-- invoice functionality end -->
<section class="card invoice-page">
  <div id="invoice-template" class="card-body">
      <!-- Invoice Company Details -->
      <div id="invoice-company-details" class="row">
          <div class="col-md-6 col-sm-12 text-left pt-1">
              <div class="media pt-1">
                  <img src="" alt="company logo" class=""/>
                  
              </div>
              <br>
              <img src="https://bargello.switcher.app/index.php/barcode/index/svg?barcode=BRG-POS%202515&text=BRG-POS%202515">
          </div>
          <div class="col-md-6 col-sm-12 text-right">
              <h1>Installment letter</h1>
              <div class="invoice-details mt-2">
                  <h6>Installment NO.</h6>
                  <p>2515</p>
                  <h6 class="mt-2">Date & Time</h6>
                  <p>06/19/2020 09:38 pm</p>
              </div>
          </div>
      </div>
      <!--/ Invoice Company Details -->

      <!-- Invoice Recipient Details -->
      <div id="invoice-customer-details" class="row pt-2">
          <div class="col-sm-6 col-12 text-left">
              <h5>Company Name</h5>
              <div class="recipient-info my-2">
                      <p>Address: 111111111111111111</p>
                      <p>Kingdom of Bahrain - Area</p>
                     <p></p>
              </div>
              <div class="recipient-contact pb-2">
                      <p>
                          <i class="feather icon-mail"></i>
                          admin@switcher.app
                      </p>
                      <p>
                          <i class="feather icon-phone"></i>
                          +973 - 17999999
                      </p>
              </div>
          </div>
          <div class="col-sm-6 col-12 text-right">
              <h5>Customer Name</h5>
              <div class="company-info my-2">
                       <p>Address: 111111111111111111</p>
                      <p>Kingdom of Bahrain - Area</p>
                      
              </div>
              <div class="company-contact">
                      <p>
                          <i class="feather icon-mail"></i>
                          customer@email.com
                      </p>
                      <p>
                          <i class="feather icon-phone"></i>
                           +973 - 17999999
                      </p>
              </div>
          </div>
      </div>
      <!--/ Invoice Recipient Details -->
             <div class="row">
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="basicInput">Interest (%)</label>
                                  <input type="text" class="form-control" readonly="readonly">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="helpInputTop">Tenor (Months)</label>
                                  <input type="text" class="form-control" readonly="readonly">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Down Payment</label>
                                  <input type="text" class="form-control" readonly="readonly">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="helperText">Due date of each month</label>
                                  <input type="text" class="form-control" readonly="readonly">
                              </fieldset>
                          </div>
                           <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="helperText">Start from</label>
                                   <input type="text" class="form-control" readonly="readonly">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Repayment Amount</label>
                                  <input type="text" class="form-control" readonly="readonly"   >
                              </fieldset>
                          </div>
                        <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Installment Payable</label>
                                  <input type="text" class="form-control" readonly="readonly"   >
                              </fieldset>
                          </div>
                           <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Completion date</label>
                                  <input type="text" class="form-control" readonly="readonly"   >
                              </fieldset>
                          </div>
                      </div>
    
      <!-- Invoice Footer -->
      <div id="invoice-footer" class="text-right pt-3">
          <p>thank for business with us.
          
      </div>
      <!--/ Invoice Footer -->
  </div>
</section>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/invoice.js')) }}"></script>
@endsection
