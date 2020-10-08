
@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        
    </div>
    
</div>







               
<section id="basic-datatable">
<div class="row">
          <div class="col-12">

              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Clear Payments</h4>
                  </div>

                 

                  <div class="card-content">
                      <div class="card-body card-dashboard">
                         
                               <table class="table table-striped dataex-html5-selectors"> 
                               
                                  <thead>
                                      <tr>
                                         
                                          <th>Description</th>
                                          <th>Type</th>
                                          <th>Status</th>
                                           <th>Amount</th>
                                            <th>Clear at</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Emp. Name </td>
                                          <td>Salary</td>
                                          <td>Pending</td>
                                          <td>0.000</td>
                                          <td>Not yet</td>
                                          <td> <button type="button" class="btn btn-primary  waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter">Clear</button></td>
                                      </tr>
                                      <tr>
                                          <td>Emp. Name </td>
                                          <td>Salary</td>
                                          <td>Clear</td>
                                          <td>0.000</td>
                                           <td>00/00/2020</td>
                                          <td>Cleared</td>
                                      </tr>
                                   
                                     
                                     
                                     
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/ Zero configuration table -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Clear Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="account_iban" readonly>
                                      </div>
                                  </div>
                                  <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" class="form-control" name="account_iban" readonly>
                                      </div>
                                  </div>
                                    <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Amount</label>
                                        <input type="text" class="form-control" name="account_iban" readonly>
                                      </div>
                                  </div>
                                   <div class="col-md-12 col-12">
                                   
                                      <div class="form-group">
                                      
                                        <label>Account</label>
                                           <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                    <option value="square" data-select2-id="301">Account 1</option>
                                                <option value="square" data-select2-id="302">Account 2</option>
                                                
                                        </select>
                                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                <i class="feather icon-info mr-1 align-middle"></i>
                <span>Account "Account name" not have enough amount, to skip this please click on "Clear" button</span>
              </div>
                                      </div>
                                  </div>
                                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Upload Proof</label>
                                        <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                  </div>
                                      </div>
                                  </div>
                                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Clear</button>
                  </div>
                </div>
              </div>
            </div>

  
@endsection
@section('vendor-script')
{{-- vendor files --}}
        <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/datatables/datatable.js')) }}"></script>
@endsection
