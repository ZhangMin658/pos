
@extends('layouts/contentLayoutMaster')

@section('title', 'New Customer Group')
@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Edit Customer Group</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" action="{{route('customer.groups.update',$group->id)}}" method="POST">
                      @csrf
                      <input name="_method" type="hidden" value="PUT">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-12 col-12">
                                      <div class="form-group">
                                        <label>Group Name</label>
                                        <input type="text"  class="form-control"  name="name" value="{{$group->group_name}}">
                                      </div>
                                  </div>
                                   <div class="col-12">
                                     <button type="submit" class="btn btn-success mr-1 mb-1">Update</button>
                                     <a href="javascript:void(0);" class="btn btn-danger mr-1 mb-1"  onclick="if(confirm('Are you sure you want to delete this group?')) $('#delete').submit();" >Delete

                                          </a>
                                    <a href="{{route('customer.groups.index')}}"  class="btn btn-info mr-1 mb-1">Back to List</a>
                                  </div>
                              </div>
                          </div>
                      </form>
                      <form id="delete" action="{{ route('customer.groups.destroy',$group->id) }}" method="post">
                                                  @csrf
                                                  <input type="hidden" name="_method" value="DELETE">
                                              </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection
@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
@endsection
