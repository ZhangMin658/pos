
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Wizard')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/ui/prism.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/wizard.css')) }}">
         <link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
    @endsection

@section('content')


<!-- Form wizard with step validation section start -->
<section id="validation">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Product</h4>
                </div>
                <div class="card-content">
                
                    <div class="card-body">
                        <form action="#" class="steps-validation wizard-circle" enctype="multipart/form-data">
                            <!-- Step 1 -->
                            <h6><i class="step-icon fas fa-boxes"></i> Product Information</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName3">
                                                Product Name
                                            </label>
                                            <input type="text" class="form-control required" id="firstName3" name="firstName" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName3">
                                                Category
                                            </label>
                                            <select class="custom-select form-control" id="location" name="location" required>
                                                <option value="www">Category name list</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                                Supplier
                                            </label>
                                            <select class="custom-select form-control" id="location" name="location">
                                                <option value="">Supplier name list</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                                Barcode
                                            </label>
                                            <input type="email" class="form-control " id="emailAddress5" name="emailAddress" placeholder="UPC/EAN/ISBN">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                                Product ID
                                            </label>
                                            <input type="email" class="form-control required" id="emailAddress5" name="emailAddress">
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                                Product Type
                                            </label>
                                            <select class="custom-select form-control" id="location" name="location">
                                                <option value="">As Quantity</option>
                                                <option value="Amsterdam">As Service</option>
                                                <option value="Amsterdam">Digital</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                                Current Stock
                                            </label>
                                            <input type="email" class="form-control required" id="emailAddress5" name="emailAddress">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">Attributes</label>
                                            <select class="select2 form-control" multiple="multiple">
							<option value="color">color</option>
	                        <option value="Size" selected>Size</option>
	                       
	                        
						</select>
                                        </div>
                                    </div>
 <div class="col-md-6">
<div class="form-group">
                      <label for="shortDescription11">Description:</label>
                      <textarea name="shortDescription" id="shortDescription11" rows="5" class="form-control"></textarea>
                    </div>
</div>
 <div class="col-md-6">
<div class="form-group">
                      <label for="shortDescription11">Long Description:</label>
                      <textarea name="shortDescription" id="shortDescription11" rows="5" class="form-control"></textarea>
                    </div>
</div>

                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6><i class="step-icon fas fa-dollar-sign"></i> Pricing</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle5">
                                               Cost Price (Without Tax/VAT)
                                            </label>
                                            <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" >
                                        </div>
                                        <div class="form-group">
                                            <label for="proposalTitle3">
                                                TAX (VAT)
                                            </label>
                                             <select class="custom-select form-control" id="location" name="location">
                                                <option value="">No VAT</option>
                                                <option value="">Zero</option>
                                                <option value="">5%</option>
                                            </select>
                                        </div>
                                    </div>
                                   <div class="col-md-6">
                                   <div class="form-group">
                                            <label for="jobTitle5">
                                               Selling Price
                                            </label>
                                            <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="jobTitle5">Profit</label>
                                            <input type="text" class="form-control" readonly="readonly" name="jobTitle" >
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">	
					            <label>Quantity Units</label>		
                    				<div class="col-md-9 col-sm-9 col-lg-12">
							<div class="table-responsive">
								<table  class="table">
									<thead>
										<tr>
										<th>Name</th>
										<th>Qty.</th>
										<th>Selling Price</th>
										<th>Cost Price</th>
                                        <th>Barcode</th>
										<th>Delete</th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][unit_name]" value="" ></td>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][unit_quantity]" value="" ></td>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][unit_price]" value="" ></td>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][unit_price]" value="" ></td>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][cost_price]" value="" ></td>
                                        
                                            <td><i class="fas fa-times" style="color:red;"></i></td>
                                        </tr>
                                    </tbody>
								</table>
								
								<a href="javascript:void(0);" id="add_quantity_unit">Add</a>
								</div>
							</div>
						</div><hr>
                        <div class="form-group">	
					            <label>Attributes</label>		
                    				<div class="col-md-9 col-sm-9 col-lg-12">
							<div class="table-responsive">
								<table  class="table">
									<thead>
										<tr>
										<th>Type</th>
										<th>Attribute</th>
										<th>Cost Price</th>
										<th>Selling Price</th>
                                        <th>Barcode</th>
                                         <th>Stock</th>
										<th>Delete</th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][unit_name]" value="" readonly="readonly" ></td>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][unit_quantity]" value="" readonly="readonly" ></td>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][unit_price]" value=""></td>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][unit_price]" value=""></td>
                                            <td><input type="text" class="quantity_units_to_edit form-control" data-index="-1" name="quantity_units_to_edit[-1][cost_price]" value=""></td>
                                             <td> <select class="custom-select form-control" id="location" name="location">
                                                <option value="">In-Stock</option>
                                                <option value="">Out of Stock</option>
                                                </select></td>
                                            <td><i class="fas fa-times" style="color:red;"></i></td>
                                        </tr>
                                    </tbody>
								</table>
								
							
								</div>
							</div>
						</div>
                            </fieldset>

                           
                             <h6><i class="step-icon feather icon-image"></i> Photo & Branch</h6>
                            <fieldset>
                            <label for="jobTitle5">Products Photo</label>
                               <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose photo</label>
                                      
                                  </div>
                                   <label for="jobTitle5"></label>
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose photo</label>
                                      
                                  </div>
                                  <label for="jobTitle5"></label>
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose photo</label>
                                      <label for="jobTitle5"></label>
                                  </div>
                                  <div class="form-group">
                                            <label for="proposalTitle3">Branch</label>
                                             <select class="custom-select form-control" id="location" name="location">
                                                <option value="">All Branches</option>
                                                <option value="">Online Only</option>
                                                <option value="">Branch A</option>
                                                <option value="">Branch B</option>
                                                
                                            </select>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" name="customCheck" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Online Store</label>
                  </div>
                                  <label for="jobTitle5"></label>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</section>
<!-- Form wizard with step validation section end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/extensions/jquery.steps.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
         <script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/ui/prism.min.js')) }}"></script>
         <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/wizard-steps.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/extensions/dropzone.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
@endsection
