
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
              <div class="card"><a href="sale_invoice_new" id="addRow" class="btn btn-success btn-block mb-2"><i class="feather icon-plus"></i>&nbsp; Add new Invoice</a>
                  <div class="card-header">
                      <h4 class="card-title">Invoices</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                         <table class="table table-striped dataex-html5-selectors"> 
                               <thead>
                                      <tr>
                                          <th>Reference</th>
                                          <th>Issued on</th>
                                          <th>Cutomer</th>
                                          <th>Status</th>
                                          <th>Due Date</th>
                                          <th>Amount</th>
                                         <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>0001</td>
                                          <td>00/00/2020</td>
                                          <td>Name</td>
                                          <td>Pending</td>
                                          <td>00/00/2020</td>
                                         <td>100.000</td>
                                          <td>
                                          <a href="#" data-rel="tooltip" data-placement="top" title="Download Invoice" class="btn btn-sm btn-primary"><i class="fa fa-download"></i></a>
                                          <a class="btn btn-info btn-sm" href="#" data-rel="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                                          <a href="#" data-rel="tooltip" data-toggle="ajax-modal" data-placement="top" title="Add Payment" class="btn btn-sm btn-warning"><i class="fa fa-usd"></i></a>
                                          <a href="#" data-rel="tooltip" data-placement="top" title="Edit Invoice" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                          <a href="#" data-rel="tooltip" data-placement="top"  class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
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
