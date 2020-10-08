
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
                      <h4 class="card-title">List of Damage</h4>
                  </div>



                  <div class="card-content">
                      <div class="card-body card-dashboard">

                               <table class="table table-striped dataex-html5-selectors">

                                  <thead>
                                      <tr>
                                          <th width="68">Product ID</th>
                                          <th>Name</th>
                                          <th>Barcode</th>
                                          <th>Category</th>
                                          <th>Selling Price</th>
                                          <th>Quantity</th>
                                          <th>Photo</th>
                                          <th>Note</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>0001</td>
                                          <td>Bargello Car Perfume Odunsu - 8ml</td>
                                          <td>869184101907</td>
                                          <td>Car Perfume</td>
                                          <td>1.500</td>
                                           <td>22</td>
                                          <td><img src="https://cdn.browshot.com/static/images/not-found.png" width="60"hight="auto"></td>
                                          <td>Holder Borken</td>
                                          <td><button type="button" class="btn btn-outline-primary waves-effect waves-light">Return Damage</button></td>
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
