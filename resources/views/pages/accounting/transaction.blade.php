
@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
@endsection

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">
            <div class="actions action-btns">

        <div class="dt-buttons btn-group">
                <button class="btn btn-success" tabindex="0" aria-controls="DataTables_Table_0" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                <span><i class="feather icon-plus"></i> New Transaction</span></button>
               
                 </div>
                 </div>
        </div>
    </div>
</div>







               
<section id="basic-datatable">
<div class="row">
          <div class="col-12">

              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">List of transactions</h4>
                  </div>

                 

                  <div class="card-content">
                      <div class="card-body card-dashboard">
                         
                               <table class="table table-striped dataex-html5-selectors"> 
                               
                                  <thead>
                                      <tr>
                                          <th width="68">Trans ID</th>
                                          <th>Date</th>
                                          <th>Amount</th>
                                          <th>Description</th>
                                          <th>Account</th>
                                          <th>Type</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>0001</td>
                                          <td>00/00/2020</td>
                                          <td style="color:green;"><i class="fas fa-exchange-alt"></i> 0.000</td>
                                          <td>Text</td>
                                          <td>Acc (A1)</td>
                                           <td>Cash</td>
                                        <td>Edit - Delete</td>
                                      </tr>
                                       <tr>
                                          <td>0001</td>
                                          <td>00/00/2020</td>
                                          <td style="color:red;"><i class="fas fa-exchange-alt"></i> 0.000</td>
                                          <td>Text</td>
                                          <td>Acc (A1)</td>
                                           <td>Cash</td>
                                        <td>Edit - Delete</td>
                                      </tr>
                                        <tr>
                                          <td>0001</td>
                                          <td>00/00/2020</td>
                                          <td style="color:red;"><i class="fas fa-arrow-down"></i> 1.000</td>
                                          <td>Text</td>
                                          <td>Acc (A1)</td>
                                          <td>Cash</td>
                                        <td>Edit - Delete</td>
                                      </tr>
                                      <tr>
                                          <td>0001</td>
                                          <td>00/00/2020</td>
                                          <td style="color:green;"><i class="fas fa-arrow-up"></i> 3.000</td>
                                          <td>Text</td>
                                          <td>Acc (A1)</td>
                                          <td>Cash</td>
                                        <td>Edit - Delete</td>
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

<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4"  aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel4">New Transaction</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Type</label>
                                        <ul class="list-unstyled mb-0" align="center">
             <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-success">
                    <input type="radio" name="radiocolor" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Expense</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-success">
                    <input type="radio" name="radiocolor" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Income</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-success">
                    <input type="radio" name="radiocolor" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Transfer</span>
                  </div>
                </fieldset>
              </li>
            
             
            </ul>
                                      </div>
                                  </div>
                                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" id="first-name-column" class="form-control"  name="fname-column">
                                      </div>
                                  </div>
                                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Category</label>
                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                                   <option value="square" data-select2-id="301">Category 1</option>
                                              <option value="square" data-select2-id="301">Category 2</option>
                                              <option value="square" data-select2-id="301">Category 3</option>
                                        </select>
                                      </div>
                                  </div>
                                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Amount</label>
                                        <input type="text" id="first-name-column" class="form-control"  name="fname-column" value="0.000">
                                      </div>
                                  </div>
                                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Date</label>
                                       <input type='text' class="form-control format-picker" />
                                      </div>
                                  </div>
                                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Account</label>
                                        <input type="text" id="first-name-column" class="form-control"  name="fname-column">
                                      </div>
                                  </div>
                                   <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" id="first-name-column" class="form-control"  name="fname-column">
                                      </div>
                                  </div>
                                  <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Attach File</label>
                                         <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                  </div>
                                      </div>
                                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Accept</button>
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

         <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/datatables/datatable.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/pickers/dateTime/pick-a-datetime.js')) }}"></script>
@endsection
