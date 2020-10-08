
@extends('layouts/contentLayoutMaster')

@section('title', 'View Group')
@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
      <a href="{{route('customer.groups.index')}}"  class="btn btn-info mr-1 mb-1">Back to List</a>

          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">{{$group->group_name}}</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">

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
