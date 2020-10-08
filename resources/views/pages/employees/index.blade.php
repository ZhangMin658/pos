
@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('content')
<<<<<<< HEAD:resources/views/pages/employees/index.blade.php

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">

    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">
            <div class="actions action-btns">

        <div class="dt-buttons btn-group">
                <a href="{{route('employees.create')}}"><button class="btn btn-success" tabindex="0" aria-controls="DataTables_Table_0">
                <span><i class="feather icon-plus"></i> New Employee</span></button></a>
                 </div>
                 </div>
        </div>
    </div>
=======
<div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
  </div>
  <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
      <div class="form-group breadcrum-right">
          <div class="actions action-btns">
              <div class="dt-buttons btn-group">
              <a href="emp_new"><button class="btn btn-success" tabindex="0" aria-controls="DataTables_Table_0">
              <span><i class="feather icon-plus"></i> New Employee</span></button></a>
          </div>
               </div>
      </div>
  </div>
>>>>>>> cfbdbdb8f111275cfde121be007a8543b1a227bf:resources/views/pages/employees/list.blade.php
</div>

  <section id="basic-datatable">

      <div class="row">

          <div class="col-12">
<<<<<<< HEAD:resources/views/pages/employees/index.blade.php
              <div class="card">
=======

              <div class="card">


>>>>>>> cfbdbdb8f111275cfde121be007a8543b1a227bf:resources/views/pages/employees/list.blade.php
                  <div class="card-header">
                      <h4 class="card-title">List of Employees</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">

                               <table class="table table-striped dataex-html5-selectors">

                                  <thead>
                                      <tr>
                                          <th width="68">Employee ID</th>
                                          <th>Name</th>
                                          <th>Mobile</th>
                                          <th>Email</th>
                                          <th>Department</th>
                                          <th>Photo</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($employees as $employee)
                                      <tr>
                                          <td>{{$employee->id}}</td>
                                          <td>{{$employee->emp_name}}</td>
                                          <td>{{$employee->emp_phone}}</td>
                                          <td>{{$employee->emp_email}}</td>
                                          <td>{{$employee->emp_department}}</td>
                                          <td><img src="https://crowd-literature.eu/wp-content/uploads/2015/01/no-avatar.gif" width="60"hight="auto"></td>
                                          <td>
                                            <a href="emp_view"><button type="button" class="btn btn-icon btn-outline-primary waves-effect waves-light" disabled=""><i class="feather icon-file"></i></button></a>
                                            <a href="emp_edit"><button type="button" class="btn btn-icon btn-outline-warning  waves-effect waves-light" disabled=""><i class="feather icon-edit"></i></button></a>
                                            <a href="javascript:void(0);" class="text-danger"  onclick="if(confirm('Are you sure you want to delete this Employee?'))">
                                            <button type="button" class="btn btn-icon btn-outline-danger waves-effect waves-light" disabled=""><i class="feather icon-trash"></i></button></a>
                                        </td>
                                      </tr>
<<<<<<< HEAD:resources/views/pages/employees/index.blade.php
                                      @endforeach




                              </table>
=======
                                  </table>
>>>>>>> cfbdbdb8f111275cfde121be007a8543b1a227bf:resources/views/pages/employees/list.blade.php
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
