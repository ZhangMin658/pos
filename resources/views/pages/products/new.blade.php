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
                      <input type="text" class="form-control required" id="firstName3" name="firstName">
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
                      <input type="email" class="form-control " id="emailAddress5" name="emailAddress"
                        placeholder="UPC/EAN/ISBN">
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

                      </select>
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
                     <label for="emailAddress5">Branch</label>
<select class="select2 form-control" multiple="multiple">
                        <option value="color" selected>Branch A</option>
                        <option value="Size" >Branch B</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="shortDescription11">Description:</label>
                      <textarea name="shortDescription" id="shortDescription11" rows="5"
                        class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="shortDescription11">Long Description:</label>
                      <textarea name="shortDescription" id="shortDescription11" rows="5"
                        class="form-control"></textarea>
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
                      <label for="jobTitle5">Cost Price (Without Tax/VAT)</label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="0.000">
                    </div>
                    <div class="form-group">
                      <label for="jobTitle5">TAX</label>
                      <select class="form-control">
                        <option value="color" selected>No VAT</option>
                        <option value="Size">Zero VAT</option>
                        <option value="Size">50% VAT</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jobTitle5">Selling Price</label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="0.000">
                    </div>
                    <div class="form-group">
                      <label for="jobTitle5">Profit (BD)</label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="0.000">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jobTitle5">Profit (%)</label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="0">
                    </div>

                  </div>
                  <div class="col-md-6">
                    <label for="jobTitle5">Final Price with TAX</label>
                    <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="0.000">
                  </div>
</div>
</fieldset>

              <h6><i class="step-icon feather fas fa-store-alt"></i> Stock & Branch</h6>
              <fieldset>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jobTitle5">Current Stock</label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="0">
                    </div>
                    <div class="form-group">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jobTitle5">Branch</label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="Branch A" readonly="readonly">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jobTitle5">Current Stock</label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="0">
                    </div>
                    <div class="form-group">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jobTitle5">Branch</label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" value="Branch B" readonly="readonly">
                    </div>
                  </div>
                </div>

                <h6>Quantity Units</h6>
                <div class="table-responsive">
                  <table class="table">
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
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text" value="0.000"></td>
                       <td><input type="text" value="0.000"></td>
                       <td><input type="text"></td>
                         <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>
                      <tr>
                          <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text" value="0.000"></td>
                       <td><input type="text" value="0.000"></td>
                       <td><input type="text"></td>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>
                      <tr>
                         <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text" value="0.000"></td>
                       <td><input type="text" value="0.000"></td> 
                       <td><input type="text"></td>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>
                    </tbody>
                  </table>
                </div>



              </fieldset>


                <h6><i class="step-icon fas fa-tags"></i> Attributes</h6>
<fieldset>
 <h6>Branch A</h6>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Attribute</th>
                        <th>Type</th>
                        <th>Selling Price</th>
                        <th>Cost Price</th>
                        <th>Barcode</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Color</td>
                        <td>Red</td>
                        <td><input type="text" value="0.000"></td>
                       <td><input type="text" value="0.000"></td>
                       <td><input type="text"></td>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>
                      <tr>
                         <td>Color</td>
                        <td>Block</td>
                        <td><input type="text" value="0.000"></td>
                       <td><input type="text" value="0.000"></td>
                       <td><input type="text"></td>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>
                      <tr>
                        <td>Color</td>
                        <td>Blue</td>
                        <td><input type="text" value="0.000"></td>
                       <td><input type="text" value="0.000"></td>
                       <td><input type="text"></td>
                        <td><i class="fas fa-times" style="color:red;"></i></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
</fieldset>
              <h6><i class="step-icon feather icon-image"></i> Photos</h6>
              <fieldset>
                <label for="jobTitle6">Main Photo</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose photo</label>

                </div>
               <label for="jobTitle6">Photo</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose photo</label>

                </div>
               <label for="jobTitle6">Photo</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose photo</label>
                  <label for="jobTitle6"></label>
                </div>
               
              
                <label for="jobTitle6"></label>
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
