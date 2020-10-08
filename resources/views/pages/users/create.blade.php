
@extends('layouts/contentLayoutMaster')

@section('title', 'Create User')
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
                  <h4 class="card-title">New User</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" method="POST" action="{{route('user.store')}}">
                          @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{ old('name') }}">
                                        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" id="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : ''}}" name="username" value="{{ old('username') }}">
                                        {!! $errors->first('username', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{ old('email') }}">
                                        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                 <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" id="mobile" class="form-control {{ $errors->has('mobile') ? 'is-invalid' : ''}}" name="mobile" value="{{ old('mobile') }}">
                                        {!! $errors->first('mobile', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Temporary Password</label>
                                        <input type="tet" id="passwrod" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" name="password" value="{{ old('password') }}">
                                        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                  </div>

                                  <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Group</label>
                                             <select class="select2 form-control {{ $errors->has('group') ? 'is-invalid error' : ''}} select2-hidden-accessible" name="group"  tabindex="-1" aria-hidden="true" value="{{ old('group') }}">
                                              <option value="">Select Group</option>
							                                 <option value="admin">Admin</option>
                                               <option value="sales">Sales</option>
						                                 </select>
                                             {!! $errors->first('group', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                      </div>
                                  </div>








                <div class="col-12">
                                     <button type="submit" class="btn btn-success mr-1 mb-1">Save</button>
                                      <a href="{{route('user.create')}}" class="btn btn-warning mr-1 mb-1">Clear Entry</a>
                                    <a href="{{route('user.index')}}"  class="btn btn-info mr-1 mb-1">Back to List</a>
                                  </div>
                              </div>
                          </div>
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
