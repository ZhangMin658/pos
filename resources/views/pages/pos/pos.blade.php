
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')
@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
        <body class="vertical-layout vertical-menu-modern 2-columns semi-dark-layout navbar-floating footer-static pace-done menu-collapsed">
@endsection
@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height" >
      <div class="col-8">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-12 col-12">
                                      <div class="form-group">
                                       <fieldset class="form-group position-relative">
        <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Enter item name or scan barcode" autofocus>
        <div class="form-control-position">
          <i class="feather fas fa-qrcode"></i>
        </div>
      </fieldset>

                                      </div>
                                  </div>

                             <table class="table table-striped dataex-html5-selectors">

                                  <thead>
                                      <tr>
                                          <th width="68">-</th>
                                          <th>Product Name</th>
                                          <th>Price</th>
                                          <th width="70px">Qty.</th>


                                          <th>Discount</th>
                                          <th>TAX</th>
                                          <th>Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr>
                                          <td><i class="fas fa-times" style="color:red;"></i></td>
                                          <td>iPhone xr 256GB - Black</td>
                                          <td>100.000</td>
                                          <td><input value="1" class="form-control"></td>

                                          <td><select class="form-control">
                                          <option>0</option>
                                          <option>Per Offer</option>
                                          <option>Per Emp</option>
                                          </select></td>
                                          <td>5.000</td>
                                           <td>300.000</td>
                                      </tr>







                              </table>


                                  </div>

                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>













          <div class="col-4">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-12 col-12">
                                  <div class="alert alert-primary mb-2" role="alert">
                <strong>Notification</strong> alert
              </div>
              <div class="row justify-content-md-center">
             <button type="button" class="btn mr-1  btn-primary btn-sm waves-effect waves-light">Suspend List</button>
             <button type="button" class="btn mr-1  btn-primary btn-sm waves-effect waves-light">Delivery List</button>
             <button type="button" class="btn mr-1  btn-primary btn-sm waves-effect waves-light">Sales List</button>
             <button type="button" class="btn mr-1  btn-primary btn-sm waves-effect waves-light">Return</button>
             </div>
                  <hr>
                                      <div class="form-group">
                                        <label>Customer</label>
                                        <fieldset class="form-label-group form-group position-relative has-icon-left input-divider-left">
                      <input type="text" class="form-control square" id="iconLeftDivider" placeholder="Search by (Name, Mobile)">
                      <div class="form-control-position">
                         <a href=""><i class="fas fa-user-plus"></i></a>
                      </div>
                      <label for="iconLeftDivider">Search by (Name, Mobile)</label>
                        <div class="badge badge-primary dropdown btn-lg btn-block square">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <span>Select Option</span>
                  </a>
                  <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(4px, 19px, 0px);">
                    <a class="dropdown-item" href="#">Suspend</a>
                    <a class="dropdown-item" href="#">Delivery</a>
                    <a class="dropdown-item" href="#">Quotation</a>
                    <a class="dropdown-item" href="#">Cancel</a>
                  </div>
                </div>
                  </fieldset>

              </div>



                                  </div>
                                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Discount Entire Sale</label>
                                      <select class="form-control">
                                      <option>0</option>
                                          <option>Per Offer</option>
                                          <option>Per Emp</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Sub Total</label>
                                       <h2 class="primary">300.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Discount</label>
                                            <h2 class="primary">000.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>TAX (VAT)</label>
                                         <h2 class="info">300.000 BD</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Ground Total</label>
                                         <h2 class="warning">300.000 BD</h2>
                                    </div>
                                  </div>

                                  </div>
                                  <div class="d-flex justify-content-center">
                                  <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="vueradisize" value="false">
                    <span class="vs-radio vs-radio-lg">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Username (1)</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                 <fieldset>
                  <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="vueradisize" value="false">
                    <span class="vs-radio vs-radio-lg">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Username (2)</span>
                  </div>
                </fieldset>
              </li>

            </ul></div> <br>
                               <button type="button" class="btn btn-success btn-lg btn-block mr-1 mb-1" data-toggle="modal"
              data-target="#pay">Pay</button>


                              </div>

                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  {{-- Modal --}}
           <div class="modal fade text-left" id="pay" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel6">Payment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="fas fa-times" style="color:red;"></i>
                    </button>
                  </div>
                  <form action="pos_payment" method="post">
                  <div class="modal-body " >
                  <div class="row justify-content-md-center">
                    <button type="button" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">Cash</button>
                    <button type="button" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">Card</button>
                    <button type="button" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">Benefit Pay</button>
                    <button type="button" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">Coupon</button>
                   </div>
                   <hr>
                    <div class="row justify-content-md-center">
                     <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Sub Total</label>
                                       <h2 class="block">300.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Discount</label>
                                            <h2 class="">000.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>TAX (VAT)</label>
                                         <h2 class="">300.000 BD</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Ground Total</label>
                                         <h2 class="primary">300.000 BD</h2>
                                    </div>
                                  </div>

                                   </div>
<div class="form-group">
                                        <label>Discount Entire Sale</label>
                                      <select class="form-control">
                                      <option>0</option>
                                          <option>Per Offer</option>
                                          <option>Per Emp</option>
                                          </select>
                                      </div>
                                {{-- Cash --}}
                                <div class="row justify-content-md-center">
                                    <div class="col-md-6 col-12">
                                        <label>Paid</label>
                                        <input type="text" class="form-control " placeholder="0.000" name="fname-column" id="code" autofocus>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label>Balance</label>
                                        <input type="text" class="form-control " id="readonlyInput" readonly="readonly" value="0.000">
                                    </div>
                                </div>
                                 {{-- Card --}}
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12 col-12">
                                        <label>Last 4 Digit</label>
                                        <input type="text" id="first-name-column" class="form-control text-center" placeholder="" name="fname-column">
                                    </div>
                                </div>
                                 {{-- Benefit --}}
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12 col-12">
                                        <label>Benefit Pay Transcation ID</label>
                                        <input type="text" id="first-name-column" class="form-control text-center" placeholder="" name="fname-column">
                                    </div>
                                </div>
                                {{-- Coupon --}}
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12 col-12">
                                        <label>Coupon Code</label>
                                        <input type="text" id="first-name-column" class="form-control square text-center" placeholder="" name="fname-column">
                                         <button type="button" class="btn btn-info btn-block waves-effect waves-light square">Check Coupon Code</button>
                                    </div>

                                </div>
{{-- Cash --}}
<div class="row justify-content-md-center">
  <div class="col-md-6 col-12">
      <label>Paid</label>
      <input type="text" class="form-control " placeholder="0.000" name="fname-column" id="code" autofocus>
  </div>
  <div class="col-md-6 col-12">
      <label>Payment Method</label>
     <select class="form-control">
       <option>Cash</option>
       <option>Card</option>
       <option>Benefit Pay</option>
       <option>Coupon</option>

     </select>
  </div>
</div>

                  </div>
                  <div class="modal-footer">
                    <a href="pos_payment"> <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal"><i class="fas fa-plus-circle"></i> Add payment</button></a>
                   <a href="pos_payment"> <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Complete payment</button></a>

                  </div></form>
                </div>
              </div>
            </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection
@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
         <script src="{{ asset(mix('js/scripts/modal/components-modal.js')) }}"></script>
         <script>
         $('.modal').on('shown.bs.modal', function() {
  $(this).find('[autofocus]').focus();
});</script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
@endsection
