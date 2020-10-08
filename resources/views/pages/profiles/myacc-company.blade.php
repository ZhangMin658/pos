@extends('layouts/contentLayoutMaster')

@section('title', 'Account Settings')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel='stylesheet' href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
        <link rel='stylesheet' href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/noui-slider.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/core/colors/palette-noui.css')) }}">
@endsection

@section('content')
<!-- account setting page start -->
<section id="page-account-settings">
    <div class="row">
      <!-- left menu section -->
      <div class="col-md-3 mb-2 mb-md-0">
        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
          <li class="nav-item">
            <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
              href="#account-vertical-general" aria-expanded="true">
              <i class="feather icon-globe mr-50 font-medium-3"></i>
              General
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
              href="#account-vertical-password" aria-expanded="false">
              <i class="feather icon-lock mr-50 font-medium-3"></i>
              Documents
            </a>
          </li>
         
        
         
        </ul>
      </div>
      <!-- right content section -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                  aria-labelledby="account-pill-general" aria-expanded="true">
                  <div class="media">
                    <a href="javascript: void(0);">
                      <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" class="rounded mr-75"
                        alt="profile image" height="64" width="64">
                    </a>
                    <div class="media-body mt-75">
                      <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                          for="account-upload">Upload new Logo</label>
                        <input type="file" id="account-upload" hidden>
                        <button class="btn btn-sm btn-outline-warning ml-50">Reset</button>
                      </div>
                      <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                          size of
                          800kB</small></p>
                    </div>
                  </div>
                  <hr>
                  <form novalidate>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Company Legal name</label>
                            <input type="text" class="form-control" id="account-username" 
                               required
                              data-validation-required-message="This username field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Company Commercial name</label>
                            <input type="text" class="form-control" id="account-name" 
                             required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Address Line 1</label>
                            <input type="text" class="form-control" id="account-name" 
                             required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Address Line 2</label>
                            <input type="text" class="form-control" id="account-name" 
                             required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Charge-back Contact No</label>
                            <input type="text" class="form-control" id="account-name" 
                             required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Charge-back Email Address</label>
                            <input type="text" class="form-control" id="account-name" 
                             required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Website</label>
                            <input type="text" class="form-control" id="account-name" 
                             required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Terms & Conditions URL</label>
                            <input type="text" class="form-control" id="account-name" 
                             required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                      </div>
                     
                   
                
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                          changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                  aria-labelledby="account-pill-password" aria-expanded="false">
                  <form novalidate>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-old-password">Business License Number (CR)</label>
                            <input type="file" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-new-password">Government Issued Personal ID / National ID (CPR)</label>
                             <input type="file" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-retype-new-password">VAT Certificate</label>
                           <input type="file" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                          changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
             
                <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                  aria-labelledby="account-pill-social" aria-expanded="false">
                  <form>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-twitter">Twitter</label>
                          <input type="text" id="account-twitter" class="form-control" placeholder="Add link"
                            value="https://www.twitter.com">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-facebook">Facebook</label>
                          <input type="text" id="account-facebook" class="form-control" placeholder="Add link">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-google">Google+</label>
                          <input type="text" id="account-google" class="form-control" placeholder="Add link">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-linkedin">LinkedIn</label>
                          <input type="text" id="account-linkedin" class="form-control" placeholder="Add link"
                            value="https://www.linkedin.com">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-instagram">Instagram</label>
                          <input type="text" id="account-instagram" class="form-control" placeholder="Add link">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-quora">Quora</label>
                          <input type="text" id="account-quora" class="form-control" placeholder="Add link">
                        </div>
                      </div>
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                          changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                  aria-labelledby="account-pill-connections" aria-expanded="false">
                  <div class="row">
                    <div class="col-12 mb-3">
                      <a href="javascript: void(0);" class="btn btn-info">Connect to
                        <strong>Twitter</strong></a>
                    </div>
                    <div class="col-12 mb-3">
                      <button class=" btn btn-sm btn-secondary float-right">edit</button>
                      <h6>You are connected to facebook.</h6>
                      <span>Johndoe@gmail.com</span>
                    </div>
                    <div class="col-12 mb-3">
                      <a href="javascript: void(0);" class="btn btn-danger">Connect to
                        <strong>Google</strong>
                      </a>
                    </div>
                    <div class="col-12 mb-2">
                      <button class=" btn btn-sm btn-secondary float-right">edit</button>
                      <h6>You are connected to Instagram.</h6>
                      <span>Johndoe@gmail.com</span>
                    </div>
                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                      <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                        changes</button>
                      <button type="reset" class="btn btn-outline-warning">Cancel</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                  aria-labelledby="account-pill-notifications" aria-expanded="false">
                  <div class="row">
                    <h6 class="m-1">Activity</h6>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch1">
                        <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                        <span class="switch-label w-100">Email me when someone comments
                          onmy
                          article</span>
                      </div>
                    </div>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch2">
                        <label class="custom-control-label mr-1" for="accountSwitch2"></label>
                        <span class="switch-label w-100">Email me when someone answers on
                          my
                          form</span>
                      </div>
                    </div>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                        <label class="custom-control-label mr-1" for="accountSwitch3"></label>
                        <span class="switch-label w-100">Email me hen someone follows
                          me</span>
                      </div>
                    </div>
                    <h6 class="m-1">Application</h6>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch4">
                        <label class="custom-control-label mr-1" for="accountSwitch4"></label>
                        <span class="switch-label w-100">News and announcements</span>
                      </div>
                    </div>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                        <label class="custom-control-label mr-1" for="accountSwitch5"></label>
                        <span class="switch-label w-100">Weekly product updates</span>
                      </div>
                    </div>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch6">
                        <label class="custom-control-label mr-1" for="accountSwitch6"></label>
                        <span class="switch-label w-100">Weekly blog digest</span>
                      </div>
                    </div>
                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                      <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                        changes</button>
                      <button type="reset" class="btn btn-outline-warning">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- account setting page end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/account-setting.js')) }}"></script>
@endsection