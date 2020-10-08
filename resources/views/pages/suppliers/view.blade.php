
@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('content')

 
  <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Customers Profile</h4>
               
                  </div><hr>
                   <div class="row  col-md-12 col-12 justify-content-md-center text-center"><br>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Total Amount</label>
                                       <h2 class="primary">000.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Pending amount</label>
                                            <h2 class="primary">000.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Total Qutations</label>
                                         <h2 class="info">0</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Total Invoices</label>
                                         <h2 class="warning">0</h2>
                                    </div>
                                  </div>
                                  
                                  </div>
                                  
                  <div class="card-content">
                  
                      <div class="card-body card-dashboard">
                      <div class="row">
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="basicInput">Customer Name</label>
                                  <input type="text" class="form-control" id="disabledInput" disabled="">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="helpInputTop">Address</label>
                                  <input type="text" class="form-control" id="disabledInput" disabled="">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Contact Number</label>
                                  <input type="text" class="form-control" id="disabledInput" disabled="">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="helperText">Email Address</label>
                                  <input type="text" class="form-control" id="disabledInput" disabled="">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Group</label>
                                  <input type="text" class="form-control" id="disabledInput" disabled="">
                              </fieldset>
                          </div>
                         
                      </div><hr>
                         <p class="card-title">Invoices</p>
                                <table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                      <tr>
                                          <th>Date</th>
                                          <th>Due Date</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>00/00/0000</td>
                                          <td>00/00/0000</td>
                                          <td>330.000</td>
                                          <td>PAID</td>
                                          <td>View</td>
                                      </tr>
                             
                                </table>
                          </div>
                          <div class="card-body card-dashboard">
                         <p class="card-title">Qutations</p>
                                <table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                      <tr>
                                          <th>Date</th>
                                          <th>Due Date</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>00/00/0000</td>
                                          <td>00/00/0000</td>
                                          <td>330.000</td>
                                          <td>PAID</td>
                                          <td>View</td>
                                      </tr>
                                </table>
                          </div>
                          <div class="card-body card-dashboard">
                         <p class="card-title">Installments</p>
                                <table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                      <tr>
                                          <th>Date</th>
                                          <th>Due Date</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>00/00/0000</td>
                                          <td>00/00/0000</td>
                                          <td>330.000</td>
                                          <td>PAID</td>
                                          <td>View</td>
                                      </tr>
                                </table>
                          </div>
                           <div class="card-body card-dashboard">
                         <p class="card-title">Refunds</p>
                                <table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                      <tr>
                                          <th>Date</th>
                                          <th>Due Date</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>00/00/0000</td>
                                          <td>00/00/0000</td>
                                          <td>330.000</td>
                                          <td>PAID</td>
                                          <td>View</td>
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
