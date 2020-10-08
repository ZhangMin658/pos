@extends('layouts/contentLayoutMaster')

@section('title', 'Access Control ')

{{-- page main content --}}
@section('content')


<section id="page-account-settings">
  <div class="row">
    <!-- left menu section -->
    <div class="col-md-3 mb-2 mb-md-0">
      <ul class="nav nav-pills flex-column mt-md-0 mt-1">
        <li class="nav-item">
          <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
            href="#account-vertical-general" aria-expanded="true">
            <i class="feather icon-globe mr-50 font-medium-3"></i>
            General
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-tax" data-toggle="pill" href="#account-vertical-tax"
            aria-expanded="false">
            <i class="feather icon-lock mr-50 font-medium-3"></i>
            TAX
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-smtp" data-toggle="pill" href="#account-vertical-smtp"
            aria-expanded="false">
            <i class="feather icon-info mr-50 font-medium-3"></i>
            SMTP
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-payment" data-toggle="pill" href="#account-vertical-payment"
            aria-expanded="false">
            <i class="feather icon-camera mr-50 font-medium-3"></i>
            Payment Types
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-deliveries" data-toggle="pill"
            href="#account-vertical-deliveries" aria-expanded="false">
            <i class="feather icon-feather mr-50 font-medium-3"></i>
            Deliveries
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-receipt" data-toggle="pill" href="#account-vertical-receipt"
            aria-expanded="false">
            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
            Sales & Receipt
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-perfix" data-toggle="pill" href="#account-vertical-perfix"
            aria-expanded="false">
            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
            Perfix
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-pos" data-toggle="pill" href="#account-vertical-pos"
            aria-expanded="false">
            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
            Point of Sales
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-employee" data-toggle="pill" href="#account-vertical-employee"
            aria-expanded="false">
            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
            Employee
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-units" data-toggle="pill" href="#account-vertical-units"
            aria-expanded="false">
            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
            Units
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex py-75" id="account-pill-reset" data-toggle="pill" href="#account-vertical-reset"
            aria-expanded="false">
            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
            Reset
          </a>
        </li>
      </ul>
    </div>
    <!-- right content section -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                aria-labelledby="account-pill-general" aria-expanded="true">
                <form class="form">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <label>Testing Mode</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="last-name-column">SMS</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Touch Screem</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Tax option</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Show Clock In Header</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>




                    </div>
                  </div>
                </form>
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-tax" aria-labelledby="account-pill-tax"
                aria-expanded="true">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>TAX Name</th>
                        <th>TAX %</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>VAT</td>
                        <td>5</td>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>
                    </tbody>
                  </table>
                  <button type="button" class="btn btn-flat-success mr-1 mb-1 waves-effect waves-light">Add</button>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-smtp" aria-labelledby="account-pill-smtp"
                aria-expanded="true">
                <form class="form">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <label>Server Host</label>
                        <div class="form-label-group">
                          <input type="text" id="first-name-column" class="form-control" name="fname-column">
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="last-name-column">Port</label>
                        <div class="form-label-group">
                          <input type="text" id="last-name-column" class="form-control" name="lname-column">
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Connection security</label>
                        <div class="form-label-group">
                          <input type="text" id="city-column" class="form-control" name="city-column">
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="country-floating">Authentication method</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option>SSL</option>
                            <option>TLS</option>
                            <option>Autostar</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="company-column">Username</label>
                        <div class="form-label-group">
                          <input type="text" id="company-column" class="form-control" name="company-column">
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="email-id-column">Password</label>
                        <div class="form-label-group">
                          <input type="email" id="email-id-column" class="form-control" name="email-id-column">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-payment" aria-labelledby="account-pill-payment"
                aria-expanded="true">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Payment Name</th>
                        <th>Link to Account</th>
                        <th>Percent (%)</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Benefit Pay</td>
                        <td>BISB-ACCOUNT</td>
                        <td>2.0</td>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>

                    </tbody>

                  </table>
                  <button type="button" class="btn btn-flat-success mr-1 mb-1 waves-effect waves-light">Add</button>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-deliveries"
                aria-labelledby="account-pill-deliveries" aria-expanded="true">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Area</th>
                        <th>Charge</th>
                        <th>on</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Free</td>
                        <td>Hamad Town</td>
                        <td>1.500</td>
                        <td>On US or On Customer</td>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>

                    </tbody>

                  </table>
                  <button type="button" class="btn btn-flat-success mr-1 mb-1 waves-effect waves-light">Add</button>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-receipt" aria-labelledby="account-pill-receipt"
                aria-expanded="true">
                <form class="form">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <label>Auto send sms to customer (after sales compelet) </label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="last-name-column">Print Language</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">English</option>
                            <option value="0">Arabic</option>
                            <option value="0">English and Arabic</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Require Customer For Sale</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Change Sale Date For New Sale</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Require Customer For Suspended Sale</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Show Receipt After Suspending Sale</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Hide Description On Receipt</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Hide Merchant ID From Receipt</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Print Receipt After Receiving</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Hide Signature</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Remove Customer Name From Receipt</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Remove Employee Name From Receipt</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Remove Customer Contact Info From Receipt</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Automatically Email Receipt</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Automatically Print Duplicate Receipt For Credit Card Transactions</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Always Print Duplicate Receipt For All Transactions</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Automatically Show Comments On Receipt</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Hide Barcode On Receipts</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Redirect To Sale Or Receiving Screen After Printing Receipt</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Return Policy</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Announcements/Specials</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>



                    </div>
                  </div>
                </form>
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-perfix" aria-labelledby="account-pill-perfix"
                aria-expanded="true">
                perfix
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-pos" aria-labelledby="account-pill-pos"
                aria-expanded="true">
                pos
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-employee" aria-labelledby="account-pill-employee"
                aria-expanded="true">
                <form class="form">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <label>Enable Time Clock</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="last-name-column">Log Out Automatically When Clocking Out</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">English</option>
                            <option value="0">Arabic</option>
                            <option value="0">English and Arabic</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Enable Fast User Switching (Password Not Required)</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Require Employee Login Before Each Sale</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <label for="city-column">Reset Location When Switching Employee</label>
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>



                    </div>
                  </div>
                </form>
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-units" aria-labelledby="account-pill-units"
                aria-expanded="true">
                units
              </div>
              <div role="tabpanel" class="tab-pane" id="account-vertical-reset" aria-labelledby="account-pill-reset"
                aria-expanded="true">
                reset
              </div>





            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
