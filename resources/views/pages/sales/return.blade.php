@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')
@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">

<body
  class="vertical-layout vertical-menu-modern 2-columns semi-dark-layout navbar-floating footer-static pace-done menu-collapsed">
  @endsection
  @section('content')

  <!-- // Basic multiple Column Form section start -->
  <section id="multiple-column-form">
    <div class="row match-height">
      <div class="col-8">
        <div class="card">

          <div class="card-content">
            <div class="card-body">
              <form class="form">
                <div class="form-body">
                  <div class="row">
                    <div class="col-md-12 col-12">
                      <div class="form-group">

                        <input type="text" id="first-name-column" class="form-control" name="fname-column"
                          placeholder="Enter item name or scan barcode" autofocus>
                      </div>
                    </div>

                    <table class="table table-striped dataex-html5-selectors">

                      <thead>
                        <tr>
                          <th width="68">Select</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th width="70px">Qty.</th>
                          <th>Disc %</th>
                          <th>TAX</th>
                          <th>Total</th>
                          <th width="68">-</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="false">
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>

                            </div>
                          </td>
                          <td>iPhone xr 256GB - Black</td>
                          <td>300.000</td>
                          <td><input value="1" class="form-control"></td>
                          <td>0</td>
                          <td>300.000</td>
                          <td>300.000</td>
                          <td><i class="fas fa-times" style="color:red;"></i></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="false">
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>

                            </div>
                          </td>
                          <td>iPhone xr 256GB - Black</td>
                          <td>300.000</td>
                          <td><input value="1" class="form-control"></td>
                          <td>0</td>
                          <td>300.000</td>
                          <td>300.000</td>
                          <td><i class="fas fa-times" style="color:red;"></i></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="false">
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>

                            </div>
                          </td>
                          <td>iPhone xr 256GB - Black</td>
                          <td>300.000</td>
                          <td><input value="1" class="form-control"></td>
                          <td>0</td>
                          <td>300.000</td>
                          <td>300.000</td>
                          <td><i class="fas fa-times" style="color:red;"></i></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="false">
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>

                            </div>
                          </td>
                          <td>iPhone xr 256GB - Black</td>
                          <td>300.000</td>
                          <td><input value="1" class="form-control"></td>
                          <td>0</td>
                          <td>300.000</td>
                          <td>300.000</td>
                          <td><i class="fas fa-times" style="color:red;"></i></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="vs-checkbox-con vs-checkbox-primary">
                              <input type="checkbox" value="false">
                              <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                  <i class="vs-icon feather icon-check"></i>
                                </span>
                              </span>

                            </div>
                          </td>
                          <td>iPhone xr 256GB - Black</td>
                          <td>300.000</td>
                          <td><input value="1" class="form-control"></td>
                          <td>0</td>
                          <td>300.000</td>
                          <td>300.000</td>
                          <td><i class="fas fa-times" style="color:red;"></i></td>
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


                      <div class="form-group">
                        <label>Customer</label>
                        <fieldset
                          class="form-label-group form-group position-relative has-icon-left input-divider-left">
                          <input type="text" class="form-control" id="iconLeftDivider" placeholder="Customer Name"
                            readonly="readonly">
                          <div class="form-control-position">
                            <i class="fas fa-user"></i>
                          </div>
                          <label for="iconLeftDivider">Customer Name</label>

                        </fieldset>


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
<br>
                 <button type="button" class="btn btn-warning btn-lg btn-block mr-1 mb-1" data-toggle="modal" data-target="#cash">Return Cash</button>
                 <button type="button" class="btn btn-warning btn-lg btn-block mr-1 mb-1" data-toggle="modal" data-target="#voucher">Return with Voucher</button>
                 <button type="button" class="btn btn-warning btn-lg btn-block mr-1 mb-1" data-toggle="modal" data-target="#exchange">Exchange</button>



                </div>

            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    {{-- Modal Cash--}}
    <div class="modal fade text-left" id="cash" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel6">Return Cash</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times" style="color:red;"></i>
            </button>
          </div>
          <form action="pos_payment" method="post">
            <div class="modal-body ">
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

              {{-- Cash --}}<label>Reason</label>
              <div class="row justify-content-md-center">

                <div class="col-md-6 col-12">

                  <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="radiocolor" checked="" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Damage</span>
                  </div>
                </fieldset>
                </div>
                <div class="col-md-6 col-12">
                 <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="radiocolor" checked="" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Don't Like (Un-wanted)</span>
                  </div>
                </fieldset>
                </div>
              </div>  <br>
              {{-- Cash --}}
              <div class="row justify-content-md-center">
                <div class="col-md-12 col-12">
                  <label>Note</label>
                 <textarea class="form-control" id="basicTextarea" rows="3" ></textarea>
                </div>
              </div>
           </div>
            <div class="modal-footer">
              <a href="pos_payment"> <button type="button" class="btn btn-primary btn-lg btn-block"
                  data-dismiss="modal">Submit</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
     {{-- Modal voucher--}}
    <div class="modal fade text-left" id="voucher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel6">Return with Voucher</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

         <form action="pos_payment" method="post">
            <div class="modal-body ">
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
{{-- Cash --}}<label>Reason</label>
              <div class="row justify-content-md-center">
              <div class="col-md-6 col-12">
                 <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="radiocolor" checked="" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Damage</span>
                  </div>
                </fieldset>
                </div>
                <div class="col-md-6 col-12">
                 <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="radiocolor" checked="" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Don't Like (Un-wanted)</span>
                  </div>
                </fieldset>
                </div>
              </div>  <br>
              {{-- Cash --}}
              <div class="row justify-content-md-center">
                <div class="col-md-12 col-12">
                  <label>Note</label>
                 <textarea class="form-control" id="basicTextarea" rows="3" ></textarea>
                </div>
              </div>
           </div>
            <div class="modal-footer">
              <a href="pos_payment"> <button type="button" class="btn btn-primary btn-lg btn-block"
                  data-dismiss="modal">Submit</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
     {{-- Modal exchange--}}
    <div class="modal fade text-left" id="exchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel6">exchange</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="pos_payment" method="post">
            <div class="modal-body ">
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
{{-- Cash --}}
              <div class="row justify-content-md-center">
                <div class="col-md-6 col-12">
                  <label>Exchange Products</label>
                  <input type="text" class="form-control" name="fname-column" id="code" autofocus>
                </div>
                <div class="col-md-6 col-12">
                  <label>Price</label>
                  <input type="text" class="form-control" name="fname-column" id="code" readonly="readonly">
                </div>
              </div>
              {{-- Cash --}}
              <div class="row justify-content-md-center">
                <div class="col-md-6 col-12">
                <label>To Products</label>
                <input type="text" class="form-control" name="fname-column" id="code" autofocus>
              </div>
              <div class="col-md-6 col-12">
                <label>Price</label>
                <input type="text" class="form-control" name="fname-column" id="code" readonly="readonly">
              </div>
              </div>
              {{-- Ben --}}
              <div class="row justify-content-md-center">
                <div class="col-md-6 col-12">
                <label>Discount</label>
                <input type="text" class="form-control" name="fname-column" id="code" autofocus>
              </div>
              <div class="col-md-6 col-12">
                <label>Balance</label>
                <input type="text" class="form-control" name="fname-column" id="code" readonly="readonly">
              </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="pos_payment"> <button type="button" class="btn btn-primary btn-lg btn-block"
                  data-dismiss="modal">Complete payment</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
     {{-- Modal damage--}}
    <div class="modal fade text-left" id="damage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel6">damage</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="pos_payment" method="post">
            <div class="modal-body ">
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

              {{-- Cash --}}
              <div class="row justify-content-md-center">
                <div class="col-md-6 col-12">
                  <label>Paid</label>
                  <input type="text" class="form-control form-control-lg" placeholder="0.000" name="fname-column"
                    id="code" autofocus>
                </div>
                <div class="col-md-6 col-12">
                  <label>Balance</label>
                  <input type="text" class="form-control form-control-lg" id="readonlyInput" readonly="readonly"
                    value="0.000">
                </div>
              </div>
              {{-- Cash --}}
              <div class="row justify-content-md-center">
                <div class="col-md-12 col-12">
                  <label>Last 4 Digit</label>
                  <input type="text" id="first-name-column" class="form-control text-center" placeholder=""
                    name="fname-column">
                </div>
              </div>
              {{-- Ben --}}
              <div class="row justify-content-md-center">
                <div class="col-md-12 col-12">
                  <label>Benefit Pay Transcation ID</label>
                  <input type="text" id="first-name-column" class="form-control text-center" placeholder=""
                    name="fname-column">
                </div>
              </div>
              {{-- Ben --}}
              <div class="row justify-content-md-center">
                <div class="col-md-12 col-12">
                  <label>Coupon Code</label>
                  <input type="text" id="first-name-column" class="form-control square text-center" placeholder=""
                    name="fname-column">
                  <button type="button" class="btn btn-info btn-block waves-effect waves-light square">Check Coupon
                    Code</button>
                </div>
              </div>


            </div>
            <div class="modal-footer">
              <a href="pos_payment"> <button type="button" class="btn btn-primary btn-lg btn-block"
                  data-dismiss="modal">Complete payment</button></a>
            </div>
          </form>
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
    $('.modal').on('shown.bs.modal', function () {
      $(this).find('[autofocus]').focus();
    });

  </script>
  @endsection
  @section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
  @endsection
