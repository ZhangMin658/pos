
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
                      <h4 class="card-title">List of Customers</h4>
                  </div>
                  <div class="card-content">
<div class="card-body card-dashboard">
<div class="row ">
                        <div class="form-group col-md-12 col-12">
                                        <label>From</label>
                                        <input type="date" id="city-column" class="form-control" name="city-column">
                                      </div>
                                     <div class="form-group col-md-12 col-12">
                                      <button type="button" class="btn btn-relief-success btn-block waves-effect waves-light">Go</button>
                                     </div>
                        </div>
<table class="table table-striped dataex-html5-selectors">
                               <thead>
                                      <tr>
                                          <th width="68">Employee ID</th>
                                          <th>Name</th>
                                          <th>Time In</th>
                                          <th>Time Out</th>
                                          <th>Working Hours</th>
                                          <th>Attends</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>0001</td>
                                          <td>Ahmed Ali</td>
                                          <td>08:00 AM</td>
                                          <td>04:00 PM</td>
                                          <td>8</td>
                                          <td><div class="custom-control custom-switch switch-lg custom-switch-success mr-2 mb-1">

                <input type="checkbox" class="custom-control-input" id="customSwitch90">
                <label class="custom-control-label" for="customSwitch90">
                <span class="switch-text-right">Absence</span>
                  <span class="switch-text-left">Presence</span>

                </label>
              </div></td>

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
