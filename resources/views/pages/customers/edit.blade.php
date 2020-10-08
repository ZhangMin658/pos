
@extends('layouts/contentLayoutMaster')

@section('title', 'Edit Customer')
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
                  <h4 class="card-title">Edit Customer</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" action="{{route('customers.update',$customer->id)}}" method="POST">
                      @csrf
                        <input type="hidden" name="_method" value="PUT" />
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Customer Name</label>
                                        <input type="text" class="form-control {{ $errors->has('cust_name') ? 'is-invalid' : ''}}"  name="cust_name" value="{{$customer->cust_name}}">
                                        {!! $errors->first('cust_name', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="text"  class="form-control {{ $errors->has('cust_mob') ? 'is-invalid' : ''}}" name="cust_mob" value="{{$customer->cust_mob}}">
                                        {!! $errors->first('cust_mob', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email"  class="form-control {{ $errors->has('cust_email') ? 'is-invalid' : ''}}" name="cust_email" value="{{$customer->cust_email}}">
                                        {!! $errors->first('cust_email', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Area</label>
                                            <select id="area" class="select2 form-control {{ $errors->has('cust_area') ? 'is-invalid' : ''}} select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="cust_area">
							                    <option value="Bahrain Areas" data-select2-id="301">Bahrain Areas</option>

						                    </select>
                                {!! $errors->first('cust_area', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" id="email-id-column" class="form-control {{ $errors->has('cust_address') ? 'is-invalid' : ''}}" name="cust_address" value="{{$customer->cust_address}}">
                                        {!! $errors->first('cust_address', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Group</label>
                                             <select id="group" class="select2 form-control {{ $errors->has('cust_group') ? 'is-invalid' : ''}} select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="cust_group">
                                              <option value="">Select Group</option>
                                              @foreach($groups as $group)
                                                <option value="{{$group->id}}">{{$group->group_name}}</option>
                                              @endforeach
						                                </select>
                                            {!! $errors->first('cust_group', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                      </div>
                                  </div>








                <div class="col-12">
                                     <button type="submit" class="btn btn-success mr-1 mb-1">Update</button>
                                      <a href="javascript:void(0);" class="btn btn-danger mr-1 mb-1"  onclick="if(confirm('Are you sure you want to delete this customer?')) $('#delete').submit();" >Delete

                                          </a>
                                    <a href="{{route('customers.index')}}"  class="btn btn-info mr-1 mb-1">Back to List</a>
                                  </div>
                              </div>
                          </div>
                      </form>
                      <form id="delete" action="{{ route('customers.destroy',$customer->id) }}" method="post">
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
        <script>
            $("#area").select2().val("{{$customer->cust_area}}").trigger("change");
            $("#group").select2().val("{{ isset($customer->group) ? $customer->group->id : ''  }}").trigger("change");
        </script>
@endsection
