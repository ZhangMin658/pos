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

        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-12 col-12">
                    <div class="alert alert-primary mb-2" role="alert">
                      <strong>Notification</strong> alert
                    </div>
                    <div class="row">
                      <div class="col-auto mr-auto"></div>
                      <div class="col-auto text-right"> 
                      <label>Quotation ID</label>
                        <h2 class="">12330</h2>
                      </div>
                    </div>
                    <div class=" col-md-12 col-12 col-auto">
                      <div class="form-group">

                      </div>
                    </div>
                    <div class="form-group">
                      <label>Customer</label>
                      <fieldset class="form-label-group form-group position-relative has-icon-left input-divider-left">
                        <input type="text" class="form-control" id="iconLeftDivider"
                          placeholder="Search by (Name, Mobile)">
                        <div class="form-control-position">
                          <a href=""><i class="fas fa-user-plus"></i></a>
                        </div>
                        <label for="iconLeftDivider">Search by (Name, Mobile)</label>

                      </fieldset>
                      <div class="row">
                        <div class="col-md-3 col-12">
                          <div class="form-group">
                            <b>Customer Name</b>
                            <p>Ali Ahmed</p>
                          </div>
                        </div>
                        <div class="col-md-3 col-12">
                          <div class="form-group">
                            <b>Address</b>
                            <p>Office 11, building 1234, Road 1234, Block 1234 - Hamad Town</p>
                          </div>
                        </div>
                        <div class="col-md-3 col-12">
                          <div class="form-group">
                            <b>Contact Number</b>
                            <p>97333733886</p>
                          </div>
                        </div>
                        <div class="col-md-3 col-12">
                          <div class="form-group">
                            <b>Email Address</b>
                            <p>jehad.almahari@gmail.com</p>
                          </div>
                        </div>
                      </div>
                      <div class="text-right">
                        <div class="btn-group " role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-black waves-effect waves-light btn-sm">Update
                            Contact</button>
                          <button type="button"
                            class="btn btn-outline-black waves-effect waves-light btn-sm">Profile</button>
                          <button type="button" class="btn btn-outline-black waves-effect waves-light btn-sm">Pending
                            payment Status</button>
                          <button type="button"
                            class="btn btn-outline-danger waves-effect waves-light btn-sm">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12">
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
                        <th width="68">-</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>VAT</th>
                        <th width="70px">Qty.</th>
                        <th>Disc %</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                        <td>iPhone xr 256GB - Black</td>
                        <td>300.000</td>
                        <td>000.000</td>
                        <td><input value="1" class="form-control"></td>
                        <td><select class="form-control">
                            <option>0</option>
                            <option>Per Offer</option>
                            <option>Per Emp</option>
                          </select></td>
                        <td>300.000</td>
                      </tr>
                      <tr>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                        <td>iPhone xr 256GB - Black</td>
                        <td>300.000</td>
                        <td>000.000</td>
                        <td><input value="1" class="form-control"></td>
                        <td><select class="form-control">
                            <option>0</option>
                            <option>Per Offer</option>
                            <option>Per Emp</option>
                          </select></td>
                        <td>300.000</td>
                      </tr>
                      <tr>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                        <td>iPhone xr 256GB - Black</td>
                        <td>300.000</td>
                        <td>000.000</td>
                        <td><input value="1" class="form-control"></td>
                        <td><select class="form-control">
                            <option>0</option>
                            <option>Per Offer</option>
                            <option>Per Emp</option>
                          </select></td>
                        <td>300.000</td>
                      </tr>
                      <tr>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                        <td>iPhone xr 256GB - Black</td>
                        <td>300.000</td>
                        <td>000.000</td>
                        <td><input value="1" class="form-control"></td>
                        <td><select class="form-control">
                            <option>0</option>
                            <option>Per Offer</option>
                            <option>Per Emp</option>
                          </select></td>
                        <td>300.000</td>
                      </tr>
                      <tr>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                        <td>iPhone xr 256GB - Black</td>
                        <td>300.000</td>
                        <td>000.000</td>
                        <td><input value="1" class="form-control"></td>
                        <td><select class="form-control">
                            <option>0</option>
                            <option>Per Offer</option>
                            <option>Per Emp</option>
                          </select></td>
                        <td>300.000</td>
                      </tr>




                  </table>
                  <div class="row col-md-12   col-12">
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
                    <div class="col-md-3 col-12">
                      <div class="form-group">
                        <label>Sub Total</label>
                        <h2 class="primary">300.000 BD</h2>
                      </div>
                    </div>
                    <div class="col-md-3 col-12">
                      <div class="form-group">
                        <label>Discount</label>
                        <h2 class="primary">000.000 BD</h2>
                      </div>
                    </div>
                    <div class="col-md-3 col-12">
                      <div class="form-group">
                        <label>TAX (VAT)</label>
                        <h2 class="info">300.000 BD</h2>
                      </div>
                    </div>
                    <div class="col-md-3 col-12">
                      <div class="form-group">
                        <label>Ground Total</label>
                        <h2 class="warning">300.000 BD</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          </form>
        </div>
      </div>
      <a href="pos_payment">
        <button type="button" class="btn btn-success btn-lg btn-block mr-1 mb-1">Submit Quotation</button></a>
    </div>

  </div>
  </div>
  {{-- Modal --}}
  <div class="modal fade text-left" id="pay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel6">Payment</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="pos_payment" method="post">
          <div class="modal-body ">
            <div class="row justify-content-md-center">
              <button type="button" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">Cash</button>
              <button type="button" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">Card</button>
              <button type="button" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">Benefit
                Pay</button>
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
