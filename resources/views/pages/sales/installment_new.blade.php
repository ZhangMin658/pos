
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')
@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
        
@endsection
@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height" >
  
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
  <div class="col-auto text-right"> <label>Installment ID</label>
                                         <h2 class="">12330</h2></div>
</div>
               <div class=" col-md-12 col-12 col-auto">
                                      <div class="form-group">
                                       
                                    </div>
                                  </div>
                                      <div class="form-group">
                                        <label>Customer</label>
                                        <fieldset class="form-label-group form-group position-relative has-icon-left input-divider-left">
                      <input type="text" class="form-control" id="iconLeftDivider" placeholder="Search by (Name, Mobile)">
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
                           </div>     </div>
                        <div class="text-right">
                  <div class="btn-group " role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-black waves-effect waves-light btn-sm">Update Contact</button>
                    <button type="button" class="btn btn-outline-black waves-effect waves-light btn-sm">Profile</button>
                    <button type="button" class="btn btn-outline-black waves-effect waves-light btn-sm">Pending payment Status</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light btn-sm">Cancel</button>
                  </div>
                  </div>
                                      </div>
                                      <div class="form-group">
                                       <label>Select Invoices</label>
						<select class="select2 form-control" multiple="multiple">
							<option value="001">001</option>
	                        <option value="1022" selected>1022</option>
	                        <option value="37558">37558</option>
	                        <option value="1367">1367</option>
	                        <option value="836458">836458</option>
	                        <option value="22224" selected>22224</option>
	                        
						</select>
					</div>
                                  </div>
                                    <div class="row  col-md-12 col-12 justify-content-md-center text-center"><br>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Sub Total Amount</label>
                                       <h2>000.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Total VAT</label>
                                            <h2>000.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Total Discount</label>
                                         <h2>0</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Total Amount</label>
                                         <h2>0</h2>
                                    </div>
                                  </div>
                                  
                                  </div>
                                 
                                 
                               
                                  
                                 
                                  </div>
                             
                                     </div>
                               <div class="row">
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="basicInput">Interest (%)</label>
                                  <input type="text" class="form-control" id="disabledInput">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="helpInputTop">Tenor (Months)</label>
                                  <input type="text" class="form-control" id="disabledInput">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Down Payment</label>
                                  <input type="text" class="form-control" id="disabledInput">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="helperText">Due date of each month</label>
                                  <input type="text" class="form-control" id="disabledInput">
                              </fieldset>
                          </div>
                           <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="helperText">Start from</label>
                                  <select class="form-control">
                                  <option value="January">January</option>
<option value="Febuary">Febuary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Repayment Amount</label>
                                  <input type="text" class="form-control" id="disabledInput" disabled="">
                              </fieldset>
                          </div>
                        <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Installment Payable</label>
                                  <input type="text" class="form-control" id="disabledInput" disabled="">
                              </fieldset>
                          </div>
                      </div>
                      <a href="sales_installment_page">
                      <button type="button" class="btn btn-success btn-lg btn-block mr-1 mb-1">Create Installments</button>
                        </a>  </div>
                           
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
