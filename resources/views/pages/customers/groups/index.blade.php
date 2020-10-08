
@extends('layouts/contentLayoutMaster')

@section('title', 'Customer Groups')

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
                <a href="{{route('customer.groups.create')}}"><button class="btn btn-success" tabindex="0" aria-controls="DataTables_Table_0">
                <span><i class="feather icon-plus"></i> New Customer Group</span></button></a>
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
                      <h4 class="card-title">List of Groups</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">

                               <table class="table table-striped dataex-html5-selectors">

                                  <thead>
                                      <tr>
                                          <th width="68">Group ID</th>
                                          <th>Group Name</th>
                                          <th>Total Customer</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        @foreach($groups as $group)
                                        <tr>
                                          <td> #{{ $group->id }}</td>
                                          <td> {{ $group->group_name }}</td>
                                          <td> {{ $group->customers()->count() }}</td>
                                          <td><a href="{{route('customer.groups.show',$group->id)}}" class="text-warning"><button type="button" class="btn btn-icon btn-outline-primary waves-effect waves-light" disabled=""><i class="feather icon-file"></i></button></a> <a href="{{route('customer.groups.edit',$group->id)}}"><button type="button" class="btn btn-icon btn-outline-warning  waves-effect waves-light" disabled=""><i class="feather icon-edit"></i></button></a> <a href="javascript:void(0);" class="text-danger"  onclick="if(confirm('Are you sure you want to delete this group?')) $(this).find('form').submit();" ><button type="button" class="btn btn-icon btn-outline-danger waves-effect waves-light" disabled=""><i class="feather icon-trash"></i></button>
                                              <form action="{{ route('customer.groups.destroy',$group->id) }}" method="post">
                                                  @csrf
                                                  <input type="hidden" name="_method" value="DELETE">
                                              </form>
                                          </a></td>
                                        </tr>
                                        @endforeach
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

