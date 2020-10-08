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
                      <div class="col-auto text-right"> <label>Invoice ID</label>
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
                <div class="row">
                  <div class="col-md-6 col-12">
                    <label for="last-name-column">Date</label>
                    <div class="form-label-group">
                      <input type="date" id="first-name-column" class="form-control" placeholder="First Name"
                        name="fname-column">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <label for="last-name-column">Due Date</label>
                    <div class="form-label-group">
                      <input type="date" id="last-name-column" class="form-control" placeholder="Last Name"
                        name="lname-column">

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <label for="last-name-column">Status</label>
                    <div class="form-label-group">
                      <select class="form-control" id="basicSelect">
                        <option>Draft</option>
                        <option>Sent</option>
                        <option>Overdue</option>
                        <option>Paid</option>
                        <option>Canceled</option>
                      </select>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <label for="last-name-column">Shipping/Delivery</label>
                    <div class="form-label-group">
                      <select class="form-control" id="basicSelect">
                        <option>Office 11, building 1234, Road 1234, Block 1234 - Hamad Town</option>
                        <option>No Shipping/Delivery</option>

                      </select>

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
        <button type="button" class="btn btn-success btn-lg btn-block mr-1 mb-1">Submit Invoice</button></a>
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
