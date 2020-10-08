
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
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">
            <div class="actions action-btns">

        <div class="dt-buttons btn-group">
                <a href="closing_month">
                <button class="btn btn-success" tabindex="0" aria-controls="DataTables_Table_0">
                Close This Month</button>
                </a>
                &nbsp;
                <a href="bills_new">
                <button class="btn btn-success" tabindex="0" aria-controls="DataTables_Table_0">
                Close This Year</button>
                </a>
                &nbsp;
                <a href="bills_new">
                <button class="btn btn-success" tabindex="0" aria-controls="DataTables_Table_0">
                Today Closing</button>
                </a>
                
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
                      <h4 class="card-title">List of Closing</h4>
                  </div>

                 

                  <div class="card-content">
                      <div class="card-body card-dashboard">
                         
                               <table class="table table-striped dataex-html5-selectors"> 
                               
                                  <thead>
                                      <tr>
                                          <th width="68">Closing ID</th>
                                          <th>Description</th>
                                          <th>Create Date</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>0001</td>
                                          <td>Closgin - Month - Year</td>
                                          <td>00/00/2020</td>
                                          <td>Pending</td>
                                          <td><a href="clear_payment">Clear Payment</a> - Delete</td>
                                      </tr>
                                      <tr>
                                          <td>0002</td>
                                          <td>Closgin - Month - Year</td>
                                          <td>00/00/2020</td>
                                          <td>Clear</td>
                                          <td>View - Delete</td>
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
