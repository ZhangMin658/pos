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
        <form class="form" method="POST" action="{{route('employees.store')}}"  enctype="multipart/form-data">
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
<<<<<<< HEAD:resources/views/pages/employees/create.blade.php
                            <input type="text" name="emp_name" class="form-control {{ $errors->has('emp_name') ? 'is-invalid' : ''}}" placeholder="First Name" required="">
                            {!! $errors->first('emp_name', '<div class="invalid-feedback">:message</div>') !!}
=======
                            <input type="text" name="emp_name" class="form-control" placeholder="Full Name"
                              data-validation-required-message="This First Name field is required"  aria-invalid="false">
>>>>>>> cfbdbdb8f111275cfde121be007a8543b1a227bf:resources/views/pages/employees/new.blade.php
                            <div class="help-block"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Gender</label>
                        <div class="form-label-group">
                          <select class="form-control {{ $errors->has('emp_gender') ? 'is-invalid' : ''}}" name="emp_gender">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                          </select>
                          {!! $errors->first('emp_gender', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label><b style="color:red;">*</b> Phone Number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_phone') ? 'is-invalid' : ''}}" name="emp_phone" required>
                          {!! $errors->first('emp_phone', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <!-- row two -->
                      <div class="col-md-4 col-12">
                        <label>Marital Status</label>
                        <div class="form-label-group">
                          <select class="form-control {{ $errors->has('emp_marital') ? 'is-invalid' : ''}}" name="emp_marital">
                            <option value="0">Single</option>
                            <option value="1">Married</option>
                          </select>
                          {!! $errors->first('emp_marital', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Email</label>
                        <div class="form-label-group">
                          <input type="email" class="form-control {{ $errors->has('emp_email') ? 'is-invalid' : ''}}" name="emp_email">
                          {!! $errors->first('emp_email', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Date of birth</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control {{ $errors->has('emp_dob') ? 'is-invalid' : ''}}" name="emp_dob">
                          {!! $errors->first('emp_dob', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <!-- row 3 -->
                      <div class="col-md-4 col-12 ">
                        <label>Nationality</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_nationality') ? 'is-invalid' : ''}}" name="emp_nationality">
                          {!! $errors->first('emp_nationality', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Address</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_address') ? 'is-invalid' : ''}}" name="emp_address">
                          {!! $errors->first('emp_address', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>CPR number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_cpr_no') ? 'is-invalid' : ''}}" name="emp_cpr_no">
                          {!! $errors->first('emp_cpr_no', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <!-- row 4 -->
                      <div class="col-md-4 col-12">
                        <label>Passport number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_passport_no') ? 'is-invalid' : ''}}" name="emp_passport_no">
                          {!! $errors->first('emp_passport_no', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>CPR Expiry Date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control {{ $errors->has('emp_cpr_expire') ? 'is-invalid' : ''}}" name="emp_cpr_expire">
                          {!! $errors->first('emp_cpr_expire', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Passport Expiry Date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control {{ $errors->has('emp_passport_expire') ? 'is-invalid' : ''}}" name="emp_passport_expire">
                          {!! $errors->first('emp_passport_expire', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>

                      <div class="col-md-4 col-12">
                        <label>Personal photo</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="emp_photo">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          {!! $errors->first('emp_photo', '<div class="invalid-feedback">:message</div>') !!}
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
                          <select class="form-control {{ $errors->has('emp_working_as') ? 'is-invalid' : ''}}" name="emp_working_as">
                            <option value="1">Full Time</option>
                            <option value="2">Part Time</option>
                            <option value="3">Outsource</option>
                          </select>
                          {!! $errors->first('emp_working_as', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Department</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_department') ? 'is-invalid' : ''}}" name="emp_department">
                          {!! $errors->first('emp_department', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Designation</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_designation') ? 'is-invalid' : ''}}" name="emp_designation">
                          {!! $errors->first('emp_designation', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <!-- row 6 -->
                      <div class="col-md-4 col-12">
                        <label>Joining Date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control {{ $errors->has('emp_joining') ? 'is-invalid' : ''}}" name="emp_joining">
                          {!! $errors->first('emp_joining', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Ending Date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control {{ $errors->has('emp_ending') ? 'is-invalid' : ''}}" name="emp_ending">
                          {!! $errors->first('emp_ending', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Leaves days</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_leaves') ? 'is-invalid' : ''}}" name="emp_leaves" value="0">
                          {!! $errors->first('emp_leaves', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Working Houes per day</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_name') ? 'is-invalid' : ''}}" name="emp_" value="0">
                          {!! $errors->first('emp_', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Total dayoff per week</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_name') ? 'is-invalid' : ''}}" name="emp_" value="0">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Manager Line</label>
                        <div class="form-label-group">
                          <select class="form-control {{ $errors->has('emp_working_as') ? 'is-invalid' : ''}}" name="emp_working_as">
                            <option value="1">Emploeey name</option>

                          </select>
                          {!! $errors->first('emp_working_as', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <!-- row 7 -->
                      <div class="col-md-4 col-12">
                        <label>Contract</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="emp_files">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          {!! $errors->first('emp_files', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Offer Latter</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="emp_files">
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
                          <select class="form-control {{ $errors->has('emp_salary_transfer') ? 'is-invalid' : ''}}" name="emp_salary_transfer">
                            <option value="Cash">Cash</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                            <option value="Cheque">Cheque</option>
                          </select>
                          {!! $errors->first('emp_salary_transfer', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label><b style="color:red;">*</b> Basic Salary</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_basic_salary') ? 'is-invalid' : ''}}" name="emp_basic_salary" value="0.000" required>
                          {!! $errors->first('emp_basic_salary', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Housing allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_') ? 'is-invalid' : ''}}" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Transportation allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_') ? 'is-invalid' : ''}}" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Phone allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_') ? 'is-invalid' : ''}}" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Social allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_') ? 'is-invalid' : ''}}" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Other allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_') ? 'is-invalid' : ''}}" name="emp_basic_salary" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Employee GOSI (%)</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_employee_gosi') ? 'is-invalid' : ''}}" name="emp_employee_gosi" value="0">
                          {!! $errors->first('emp_employee_gosi', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <!-- row 8 -->

                      <div class="col-md-4 col-12 expat box">
                        <label>LMRA Monthly fees</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_lmar_monthly') ? 'is-invalid' : ''}}" name="emp_lmar_monthly" value="0.000">
                          {!! $errors->first('emp_lmar_monthly', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Company COSI (%)</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_company_gosi') ? 'is-invalid' : ''}}" name="emp_company_gosi" value="0">
                          {!! $errors->first('emp_company_gosi', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>LMRA VISA Fees</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_visa_fees') ? 'is-invalid' : ''}}" name="emp_visa_fees" value="0.000">
                          {!! $errors->first('emp_visa_fees', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <!-- row 9 -->
                      <div class="col-md-4 col-12">
                        <label>LMRA VISA Expiry date</label>
                        <div class="form-label-group">
                          <input type="date" class="form-control {{ $errors->has('emp_visa_expiry') ? 'is-invalid' : ''}}" name="emp_visa_expiry">
                          {!! $errors->first('emp_visa_expiry', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Bank Name</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_bank') ? 'is-invalid' : ''}}" name="emp_bank">
                          {!! $errors->first('emp_bank', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Account Number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_iban') ? 'is-invalid' : ''}}" name="emp_iban">
                          {!! $errors->first('emp_iban', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>IBAN</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_iban') ? 'is-invalid' : ''}}" name="emp_iban">
                          {!! $errors->first('emp_name', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <hr>


                      <div class="col-md-4 col-12">
                        <label>Total Salary with allowance</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_') ? 'is-invalid' : ''}}" name="emp_iban" disabled value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Total Deduction</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_') ? 'is-invalid' : ''}}" name="emp_iban" disabled value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Net Salary</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_') ? 'is-invalid' : ''}}" name="emp_iban" disabled value="0.000">
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

                          <select class="form-control {{ $errors->has('emp_driving') ? 'is-invalid' : ''}}" name="emp_driving">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select>
                          {!! $errors->first('emp_driving', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Emergency contact name</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_emrc_name') ? 'is-invalid' : ''}}" name="emp_emrc_name">
                          {!! $errors->first('emp_emrc_name', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Emergency contact Number</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_emrc_number') ? 'is-invalid' : ''}}" name="emp_emrc_number">
                          {!! $errors->first('emp_emrc_number', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <!-- row 12 -->

                      <div class="col-md-4 col-12">
                        <label>Emergency contact Relationship</label>
                        <div class="form-label-group">
                          <select class="form-control {{ $errors->has('emp_emrc_relationship') ? 'is-invalid' : ''}}" name="emp_emrc_relationship">
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
                          {!! $errors->first('emp_emrc_relationship', '<div class="invalid-feedback">:message</div>') !!}
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
                          <select class="select2 form-control {{ $errors->has('emp_name') ? 'is-invalid' : ''}}" multiple="multiple">
                            <optgroup label="Select Branch">
                              <option value="romboid">All Branches</option>
                              <option value="trapeze">Branch A</option>
                              <option value="triangle">Branch 2</option>

                            </optgroup>

                          </select>
                          {!! $errors->first('emp_branch', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Maximum Discount (%)</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_name') ? 'is-invalid' : ''}}" name="emp_email" value="0">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Total Discount (BD)</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_name') ? 'is-invalid' : ''}}" name="emp_dob" value="0.000">
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <label>Monthly Target</label>
                        <div class="form-label-group">
                          <input type="text" class="form-control {{ $errors->has('emp_name') ? 'is-invalid' : ''}}" name="emp_dob" value="0.000">
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
