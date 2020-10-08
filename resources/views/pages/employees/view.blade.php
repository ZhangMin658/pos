
@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

@section('vendor-style')
<link rel="stylesheet" href="{{ asset(mix('css/pages/app-user.css')) }}">
@endsection

@section('content')
<!-- page users view start -->
<section class="page-users-view">
  <div class="row">
    <!-- account start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">Employee Information</div>
          <div class="row">
            <div class="col-2 users-view-image">
              <img src="{{ asset('https://www.barrons-bds.com/wp-content/uploads/2018/05/avatar-male.jpg') }}" class="w-100 rounded mb-2"
                alt="avatar">
              <!-- height="150" width="150" -->
            </div>
            <div class="col-sm-4 col-12">
              <table>
                <tr>
                  <td class="font-weight-bold">Full Name</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Gender</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Date of birth</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Leave Balance</td>
                  <td>---</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6 col-12 ">
              <table class="ml-0 ml-sm-0 ml-lg-0">
                <tr>
                  <td class="font-weight-bold">Marital Status</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Nationality</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Driving license</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Total working days</td>
                  <td>---</td>
                </tr>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- account end -->
    <!-- information start -->
    <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Job Information</div>
          <table>
            <tr>
              <td class="font-weight-bold">Working As</td>
              <td>---
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Designation</td>
              <td>---</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Department</td>
              <td>---
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Joining Date</td>
              <td>---
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Leaves days</td>
              <td>---</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Manager Line</td>
              <td>---</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- information start -->
    <!-- social links end -->
    <div class="col-md-6 col-12 ">
      <div class="card ">
        <div class="card-body">
          <div class="card-title mb-2">Salary details</div>

            <div class="row">
              <div class="col">
                <table>
                  <tr>
                    <td class="font-weight-bold">Salary Transfer type</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Basic Salary</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Housing allowance</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Transportation allowance</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Phone allowance</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Social allowance</td>
                    <td>---</td>
                  </tr>
                </table>
              </div>
              <div class="col">
                <table>
                  <tr>
                    <td class="font-weight-bold">Other allowance</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Employee GOSI (%)</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Company COSI (%)</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">LMRA Monthly fees</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">LMRA VISA Fees</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Net Salary</td>
                    <td>---</td>
                  </tr>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- social links end -->
    <!-- information start -->
    <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Bank Information</div>
          <table>
            <tr>
              <td class="font-weight-bold">Bank Name</td>
              <td>---</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Account Number</td>
              <td>---</td>
            </tr>
            <tr>
              <td class="font-weight-bold">IBAN</td>
              <td>---</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Bank Swift</td>
              <td>---</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- information start -->
    <!-- social links end -->
    <div class="col-md-6 col-12 ">
      <div class="card ">
        <div class="card-body">
          <div class="card-title mb-2">Other details</div>

            <div class="row">
              <div class="col">
                <table>
                  <tr>
                    <td class="font-weight-bold">Work on Branch(s)</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Maximum Discount (%)</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Total Discount (BD)</td>
                    <td>---</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Monthly Target</td>
                    <td>---</td>
                  </tr>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- social links end -->
     <!-- information start -->
     <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Leave</div>
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Total Days</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>10/08/2020</td>
                      <td>20/08/2020</td>
                      <td>10</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>10/08/2020</td>
                      <td>20/08/2020</td>
                      <td>10</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>10/08/2020</td>
                      <td>20/08/2020</td>
                      <td>10</td>
                      <td>20</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
      </div>
    </div>
    <!-- information start -->
     <!-- information start -->
     <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Expiration Dates</div>
          <table>
            <tr>
              <td class="font-weight-bold">CPR Expiry</td>
              <td> 00/00/0000</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Passport Expiry</td>
              <td> 00/00/0000</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Contract Ending</td>
              <td> 00/00/0000</td>
            </tr>
            <tr>
              <td class="font-weight-bold">LMRA VISA Expiry</td>
              <td> 00/00/0000</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- information start -->
    <!-- permissions start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2">Documents</h6>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Contract</th>
                  <th>Offer Latter</th>
                  <th>CPR Copy</th>
                  <th>Passport Copy</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="#" target="_blank"><img src="https://cdn.browshot.com/static/images/not-found.png" width="80px"></a>
                  </td>
                  <td>
                    <a href="#" target="_blank"><img src="https://cdn.browshot.com/static/images/not-found.png" width="80px"></a>
                  </td>
                  <td>
                    <a href="#" target="_blank"><img src="https://cdn.browshot.com/static/images/not-found.png" width="80px"></a>
                  </td>
                  <td>
                    <a href="#" target="_blank"><img src="https://cdn.browshot.com/static/images/not-found.png" width="80px"></a>
                  </td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2">Emergency contact</h6>
            <br>
            <div class="container">
            <div class="row">
              <div class="col">
                <b>Contact name :</b> ----
              </div>
              <div class="col">
                <b>Contact Number :</b> ---
              </div>
              <div class="col">
                <b>Contact Relationship :</b> ---
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- permissions end -->
  </div>
</section>
@endsection

@section('page-script')
<script src="{{ asset(mix('js/scripts/pages/app-user.js')) }}"></script>
@endsection
