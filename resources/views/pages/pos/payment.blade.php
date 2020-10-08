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
            <button class="btn btn-outline-primary" type="button">Send Receipt</button>
          </div>
        </div>
      </fieldset>
      <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
        <button class="btn btn-primary btn-print ml-0 ml-md-1"> <i class="feather icon-file-text"></i> Print Receipt</button>
        <button class="btn btn-primary btn-print ml-0 ml-md-1"> <i class="feather icon-file-text"></i> Print A4</button>
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
              <h1>Sales Receipt</h1>
              <div class="invoice-details mt-2">
                  <h6>Receipt NO.</h6>
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

      <!-- Invoice Items Details -->
      <div id="invoice-items-details" class="pt-1 invoice-items-table">
          <div class="row">
              <div class="table-responsive col-sm-12">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty.</th>
                         <th>Disc %</th>
                          <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>iPhone xr 256GB - Black</td>
                           <td>300.000</td>
                        <td>1</td>
                        <td>0</td>
                         <td>300.000</td>
                      </tr>
                      
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
      <div id="invoice-total-details" class="invoice-total-table">
          <div class="row">
              <div class="col-7 offset-5">
                  <div class="table-responsive">
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                              <th>Sub Total</th>
                              <td>0.000 BD</td>
                          </tr>
                          <tr>
                              <th>Discount</th>
                              <td>0.000 BD</th>
                          </tr>
                          <tr>
                              <th>TAX (VAT)</th>
                               <td>0.000 BD</th>
                          </tr>
                          <tr>
                              <th>Total</th>
                               <td>0.000 BD</th>
                          </tr>
                          <tr>
                              <th>Payment Method</th>
                               <td>Cash</th>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
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
