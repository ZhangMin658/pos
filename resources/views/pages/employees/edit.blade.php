@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')
@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/validation/form-validation.css')) }}">
@endsection
@section('content')
<section id="basic-tabs-components input-validation">
  <div class="row multiple-validation">
    <div class="col-sm-12">
      <div class="card overflow-hidden">
        <div class="card-header">
          <h4 class="card-title">New Employee</h4>

        </div>
        <form class="form" action="employeescontroller" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-content">

            <div class="card-body">




              <div class="row col-12 ">
                <div class="col-6 content-header-left text-md-left ">
                  Non-Bahraini (Expat) <input type="checkbox" id="" name="" value="">
                </div>
                <div class="col-6 content-header-right text-md-right ">
                  <button type="submit" class="btn btn-primary mr-1 mb-1">Save</button>
                </div>
              </div>


              <ul class="nav nav-tabs " role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" aria-controls="home1"
                    role="tab">Personal Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " id="home-tab2" data-toggle="tab" href="#home2" aria-controls="home2"
                    role="tab">Job information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " id="home-tab3" data-toggle="tab" href="#home3" aria-controls="home3"
                    role="tab">Salary</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " id="home-tab5" data-toggle="tab" href="#home5" aria-controls="home5"
                    role="tab">Link to</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " id="home-tab4" data-toggle="tab" href="#home4" aria-controls="home4"
                    role="tab">Others</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="home1" aria-labelledby="home-tab1" role="tabpanel">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-4 col-12">
                        <label><b style="color:red;">*</b> Full Name</label>
                        <div class="form-label-group controls">
                          <div class="controls">
                            <input type="text" name="text" class="form-control" placeholder="First Name" required=""
                              data-validation-required-message="This First Name field is required" aria-invalid="false">
                            <div class="help-block"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Gender</label>
                        <div class="form-label-group">
                          <select class="form-control" name="emp_gender">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label><b style="color:red;">*</b> Phone Number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_phone" required>
                        </div>
                      </div>
                      <!-- row two -->
                      <div class="col-md-4 col-12">
                        <label>Marital Status</label>
                        <div class="form-label-group">
                          <select class="form-control" name="emp_marital">
                            <option value="0">Single</option>
                            <option value="1">Married</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Email</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_email">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Date of birth</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control" name="emp_dob">
                        </div>
                      </div>
                      <!-- row 3 -->
                      <div class="col-md-4 col-12 ">
                        <label>Nationality</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_nationality">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Address</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_address">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>CPR number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_cpr_no">
                        </div>
                      </div>
                      <!-- row 4 -->
                      <div class="col-md-4 col-12">
                        <label>Passport number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_passport_no">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>CPR Expiry Date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control" name="emp_cpr_expire">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Passport Expiry Date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control" name="emp_passport_expire">
                        </div>
                      </div>

                      <div class="col-md-4 col-12">
                        <label>Personal photo</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="emp_photo">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="home2" aria-labelledby="home-tab2" role="tabpanel">
                  <div class="form-body">
                    <div class="row">
                      <!-- row 5 -->
                      <div class="col-md-4 col-12">
                        <label>Working As</label>
                        <div class="form-label-group">
                          <select class="form-control" name="emp_working_as">
                            <option value="1">Full Time</option>
                            <option value="2">Part Time</option>
                            <option value="3">Outsource</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Department</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_department">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Designation</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_designation">
                        </div>
                      </div>
                      <!-- row 6 -->
                      <div class="col-md-4 col-12">
                        <label>Joining Date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control" name="emp_joining">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Ending Date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control" name="emp_ending">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Leaves days</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_leaves" value="0">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Working Houes per day</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_leaves" value="0">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Total dayoff per week</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_leaves" value="0">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Manager Line</label>
                        <div class="form-label-group">
                          <select class="form-control" name="emp_working_as">
                            <option value="1">Emploeey name</option>

                          </select>
                        </div>
                      </div>
                      <!-- row 7 -->
                      <div class="col-md-4 col-12">
                        <label>Contract</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="emp_files">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Offer Latter</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="emp_files">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                      <div class="col-md-4 col-12 ">
                        <label>CPR Copy</label>
                        <div class="custom-file ">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="emp_files">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                      <div class="col-md-4 col-12 ">
                        <label>Passport Copy</label>
                        <div class="custom-file ">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="emp_files">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="home3" aria-labelledby="home-tab3" role="tabpanel">
                  <div class="form-body">
                    <div class="row">
                      <!-- row 7 -->
                      <div class="col-md-4 col-12">
                        <label>Salary Transfer type</label>
                        <div class="form-label-group">
                          <select class="form-control" name="emp_salary_transfer">
                            <option value="Cash">Cash</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                            <option value="Cheque">Cheque</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label><b style="color:red;">*</b> Basic Salary</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_basic_salary" value="0.000" required>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Housing allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Transportation allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Phone allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Social allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Other allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Employee GOSI (%)</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_employee_gosi" value="0">
                        </div>
                      </div>
                      <!-- row 8 -->

                      <div class="col-md-4 col-12 expat box">
                        <label>LMRA Monthly fees</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_lmar_monthly" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Company COSI (%)</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_company_gosi" value="0">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>LMRA VISA Fees</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_visa_fees" value="0.000">
                        </div>
                      </div>
                      <!-- row 9 -->
                      <div class="col-md-4 col-12">
                        <label>LMRA VISA Expiry date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control" name="emp_visa_expiry">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Bank Name</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_bank">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Account Number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_iban">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>IBAN</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_iban">
                        </div>
                      </div>
                      <hr>


                      <div class="col-md-4 col-12">
                        <label>Total Salary with allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_iban" disabled value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Total Deduction</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_iban" disabled value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Net Salary</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_iban" disabled value="0.000">
                        </div>
                      </div>


                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="home4" aria-labelledby="home-tab4" role="tabpanel">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-4 col-12">
                        <label>Driving license</label>
                        <div class="form-label-group">

                          <select class="form-control" name="emp_driving">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Emergency contact name</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_emrc_name">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Emergency contact Number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_emrc_number">
                        </div>
                      </div>
                      <!-- row 12 -->

                      <div class="col-md-4 col-12">
                        <label>Emergency contact Relationship</label>
                        <div class="form-label-group">
                          <select class="form-control" name="emp_emrc_relationship">
                            <option value="Not selection">Not selection</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Son">Son</option>
                            <option value="Friend">Friend</option>
                            <option value="Mother">Mother</option>
                            <option value="Father">Father</option>
                            <option value="Wife">Wife</option>
                            <option value="Grandfather">Grandfather</option>
                            <option value="Grandmother">Grandmother</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="home5" aria-labelledby="home-tab5" role="tabpanel">
                  <div class="form-body">
                    <div class="row">
                      <!-- row two -->
                      <div class="col-md-4 col-12">
                        <label>Branch</label>
                        <div class="form-label-group">
                          <select class="select2 form-control" multiple="multiple">
                            <optgroup label="Select Branch">
                              <option value="romboid">All Branches</option>
                              <option value="trapeze">Branch A</option>
                              <option value="triangle">Branch 2</option>

                            </optgroup>

                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Maximum Discount (%)</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_email" value="0">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Total Discount (BD)</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_dob" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Monthly Target</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control" name="emp_dob" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Target Option</label>
                        <div class="form-label-group">
                          <fieldset>
                            <div class="vs-radio-con">
                              <input type="radio" name="radiocolor" checked="" value="false">
                              <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                              </span>
                              <span class="">No Target</span>
                            </div>
                          </fieldset>
                          <fieldset>
                            <div class="vs-radio-con">
                              <input type="radio" name="radiocolor" checked="" value="false">
                              <span class="vs-radio">
                                <span class="vs-radio--border"></span>
                                <span class="vs-radio--circle"></span>
                              </span>
                              <span class="">Have Target</span>
                            </div>
                          </fieldset>
                        </div>
                      </div>
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

@endsection
@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/validation/form-validation.js')) }}"></script>
@endsection
