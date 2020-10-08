
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
                <a href="attributes_new"><button class="btn btn-success" tabindex="0" aria-controls="DataTables_Table_0">
                <span><i class="feather icon-plus"></i> New Attribute</span></button></a>
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
                      <h4 class="card-title">List of Attributes</h4>
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
                                          <td><img src="https://lh3.googleusercontent.com/proxy/nt9OIanP0RGbMtzNRvOQxrT0s8sD3xN52NO_NaD6phR0hANgju7AdZCTajKtxRdptnRFnFI3da8hbjCdC9Il15xgXhNW6saP_qrAZjNkMyxocUEMThlBvgy1Vq63HBYoPT5Eforv" width="60"hight="auto"></td>
                                          <td>Edit</td>
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
