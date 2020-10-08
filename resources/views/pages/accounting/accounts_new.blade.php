
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
              <div class="card-header">
                  <h4 class="card-title">New Account</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Account Name</label>
                                        <input type="text" id="first-name-column" class="form-control"  name="fname-column">
                                      </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Type</label>
                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                    <option value="square" data-select2-id="301">Check</option>
                                                <option value="square" data-select2-id="302">Saving</option>
                                                <option value="square" data-select2-id="303">Current</option>
                                                <option value="square" data-select2-id="304">Credit Card</option>
                                                <option value="square" data-select2-id="305">Cash</option>
                                                <option value="square" data-select2-id="306">Emergency Fund</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Bank Name</label>
                                       <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="account_bank">
							                    <option value="National Bank of Bahrain (NBB)" data-select2-id="301">National Bank of Bahrain (NBB)</option>
	                                            <option value="Bank of Bahrain and Kuwait (BBK)" data-select2-id="302">Bank of Bahrain and Kuwait (BBK)</option>
	                                            <option value="Ahli United Bank (AUB)" data-select2-id="303">Ahli United Bank (AUB)</option>
	                                            <option value="Arab Bank" data-select2-id="304">Arab Bank</option>
	                                            <option value="Al Baraka Islamic Bank" data-select2-id="305">Al Baraka Islamic Bank</option>
	                                            <option value="Ithmaar Bank" data-select2-id="306">Ithmaar Bank</option>
	                                            <option value="Al Salam Bank" data-select2-id="307">Al Salam Bank</option>
                                                <option value="Citibank" data-select2-id="308">Citibank</option>
                                                <option value="HSBC Bank Middle East" data-select2-id="309">HSBC Bank Middle East</option>
                                                <option value="ila bank" data-select2-id="310">ila bank</option>
                                                <option value="National Bank of Kuwait (NBK)" data-select2-id="311">National Bank of Kuwait (NBK)</option>
                                                <option value="Standard Chartered Bank" data-select2-id="312">Standard Chartered Bank</option>
                                                <option value="Khaleeji Commercial Bank (KHCB)" data-select2-id="313">Khaleeji Commercial Bank (KHCB)</option>
                                                <option value="Bahrain Islamic Bank (BISB)" data-select2-id="314">Bahrain Islamic Bank (BISB)</option>
                                                <option value="Bahrain Credit" data-select2-id="314">Bahrain Credit</option>
						                    </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Currency</label>
                                            <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                    <option value="square" data-select2-id="301">Bahraini Dinar (BD)</option>
	                                          </select>
                                      </div>
                                  </div>
                                 <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Balance</label>
                                        <input type="text" id="first-name-column" class="form-control"  name="fname-column">
                                      </div>
                                  </div>
                                <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Status</label>
                                            <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                    <option value="square" data-select2-id="401">Active</option>
                                                 <option value="square" data-select2-id="402">Disactive</option>
	                                          </select>
                                      </div>
                                  </div>




                                  </div>
                               
                                 
                                  
                                 
                                  



                <div class="col-12">
                                     <button type="submit" class="btn btn-success mr-1 mb-1">Save</button>
                               
                                    <a href="accounts"  class="btn btn-info mr-1 mb-1">Back to List</a>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection
@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
@endsection
