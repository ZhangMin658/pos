
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

       
                 </div>
        </div>
    </div>
</div>


<div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Generate Payslip</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                  <label for="first-name-column">Select Employee</label>
                                      <div class="form-label-group">
                                             <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="cust_area">
							                    
                                                <option value='' selected>--Select Employee Name--</option>
	                                          </select>
                                          
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                  <label for="last-name-column">Month</label>
                                      <div class="form-label-group">
                                          <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="cust_area">
							                    <option value='' selected>--Select Month--</option>
    <option  value='1'>Janaury</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>    
	                                          </select>
                                          
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                  <label for="city-column">Year</label>
                                      <div class="form-label-group">
                                      <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="cust_area">
                                                         <option value='' selected>--Select Year--</option>
							                    <option value="Bahrain Areas" data-select2-id="301">2019</option>
                                                <option value="Bahrain Areas" data-select2-id="301">2020</option>
	                                          </select>
                                          
                                      </div>
                                  </div>
                                
                                 
                                 
                <div class="col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Generate Payslip</button>
                                      
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>




               
<section id="basic-datatable">
<div class="row">
          <div class="col-12">

              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">List of Employee Payslip</h4>
                  </div>

                 

                  <div class="card-content">
                      <div class="card-body card-dashboard">
                         
                               <table class="table table-striped dataex-html5-selectors"> 
                               
                                  <thead>
                                      <tr>
                                          <th width="68">Slip Number</th>
                                          <th>Employee Name</th>
                                          <th>Month & Year</th>
                                          <th>Payment Transfer Date</th>
                                          <th>NET Salary</th>
                                           <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>0001</td>
                                          <td>Ali Ahmed</td>
                                          <td>November 2020</td>
                                          <td>00/00/2020</td>
                                          <td>100.000</td>
                                          <td>Paid</td>
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
