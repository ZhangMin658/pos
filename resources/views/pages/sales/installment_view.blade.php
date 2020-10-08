
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
                      <h4 class="card-title">Installments</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <div class="row  col-md-12 col-12 justify-content-md-center text-center"><br>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Total Amount</label>
                                       <h2>000.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Total Paid</label>
                                            <h2>000.000 BD</h2>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Balance</label>
                                         <h2>000.000 BD</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="form-group">
                                        <label>Remaining installments</label>
                                         <h2>22</h2>
                                    </div>
                                  </div>
                                  
                                  </div>
                               <table class="table table-striped dataex-html5-selectors"> 
                               
                                  <thead>
                                      <tr>
                                          <th width="68" >Insta ID</th>
                                          <th>Receipt Of</th>
                                          <th>Due Date</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr style="background:#f5b5b5;">
                                          <td>0001</td>
                                          <td>1 / 30</td>
                                          <td>22/12/2020</td>
                                          <td>100.000</td>
                                          <td>Not Yet</td>
                                          <td><button type="button" class="btn btn-flat-success  waves-effect waves-light"><i class="fas fa-check"></i> PAID</button></td>
                                      </tr>
                                      <tr>
                                          <td>0001</td>
                                          <td>2 / 30</td>
                                          <td>22/12/2020</td>
                                          <td>100.000</td>
                                          <td>Not Yet</td>
                                          <td><button type="button" class="btn btn-flat-success  waves-effect waves-light"><i class="fas fa-check"></i> PAID</button></td>
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
