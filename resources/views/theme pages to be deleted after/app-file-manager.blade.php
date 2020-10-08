@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','File Manager')
@section('vendor-styleFile ManagerFile Manager')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-file-manager.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-list-view.css')}}">
@endsection

{{-- sidebar included --}}
@include('pages.app-file-manager-sidebar')

@section('content')
<!-- overlay container -->
<div class="file-manager-content-overlay"></div>

<!-- file manager app content starts -->
  <div class="file-manager-main-content">

      <!-- search area start -->
      <div class="file-manager-app-searchbar d-flex align-items-center">
          <div class="sidebar-toggle d-block d-xl-none float-left align-middle ml-1">
            <i class="feather file-manager-toggler icon-menu font-medium-5"></i>
          </div>
          <fieldset class="form-group position-relative has-icon-left m-0 flex-grow-1">
            <input type="text" class="form-control border-0 bg-transparent" id="todo-search" placeholder="Search..">
            <div class="form-control-position">
              <i class="feather icon-search"></i>
            </div>
          </fieldset>
      </div>
      <!-- search area ends here -->

      <!-- bottom content starts -->
      <div class="bottom-content p-2">
        <!-- drives area starts-->
        <div class="drives">
          <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-between mb-75">
                <span class="font-medium-3"> Drives </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon-with-dropdown d-flex justify-content-between">
                    <img src="{{asset('images/icons/drive.png')}}" alt="google drive" height="38">
                    <div class="dropdown-items-wrapper">
                      <div class="feather icon-more-vertical text-muted" id="dropdownMenuLink1" role="button" data-toggle="dropdown" aria-expanded="false">
                      </div>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink1">
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                      </div>
                    </div>
                  </div>
                  <div class="storage-name my-1">
                    <h5>Google drive</h5>
                  </div>
                  <div class="about-capecity">
                    <div class="capecity-details d-flex justify-content-between mb-50 text-truncate">
                      <span>45GB Used</span><span>50GB</span>
                    </div>
                    <div class="progress progress-bar-warning progress-md mb-0">
                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                  <div class="card-body">
                    <div class="icon-with-dropdown d-flex justify-content-between">
                      <img src="{{asset('images/icons/dropbox.png')}}" alt="dropbox" height="38">
                      <div class="dropdown-items-wrapper">
                        <div class="feather icon-more-vertical text-muted" id="dropdownMenuLink2" role="button" data-toggle="dropdown" aria-expanded="false">
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink2">
                          <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                          <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                          <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="storage-name my-1">
                      <h5>Dropbox</h5>
                    </div>
                    <div class="about-capecity">
                      <div class="capecity-details d-flex justify-content-between mb-50 text-truncate">
                        <span>1.2GB Used</span><span>2GB</span>
                      </div>
                      <div class="progress progress-bar-success progress-md mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="70" aria-valuemax="100" style="width:68%"></div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon-with-dropdown d-flex justify-content-between">
                    <img src="{{asset('images/icons/onedrivenew.png')}}" alt="icloud" height="38" class="p-25">
                    <div class="dropdown-items-wrapper">
                      <div class="feather icon-more-vertical text-muted" id="dropdownMenuLink3" role="button" data-toggle="dropdown" aria-expanded="false">
                      </div>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink3">
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                      </div>
                    </div>
                  </div>
                  <div class="storage-name my-1">
                    <h5>OneDrive</h5>
                  </div>
                  <div class="about-capecity">
                    <div class="capecity-details d-flex justify-content-between mb-50 text-truncate">
                      <span>1.6GB Used</span><span>2GB</span></div>
                    <div class="progress progress-bar-primary progress-md mb-0">
                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="70" aria-valuemax="100" style="width:80%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon-with-dropdown d-flex justify-content-between">
                    <img src="{{asset('images/icons/icloud-1.png')}}" alt="icloud" height="38" class="p-25">
                    <div class="dropdown-items-wrapper">
                      <div class="feather icon-more-vertical text-muted" id="dropdownlink4" role="button" data-toggle="dropdown" aria-expanded="false">
                      </div>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownlink4">
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                      </div>
                    </div>
                  </div>
                  <div class="storage-name my-1">
                    <h5>iCloud</h5>
                  </div>
                  <div class="about-capecity">
                    <div class="capecity-details d-flex justify-content-between mb-50 text-truncate">
                      <span>1.8GB Used</span><span>3GB</span></div>
                    <div class="progress progress-bar-info progress-md mb-0">
                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="70" aria-valuemax="100" style="width:60%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- drives area ends-->

        <!-- files area starts here -->
        <div class="files">
          <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-between mb-75">
                <span class="font-medium-3"> Files </span>
                <span class="font-medium-2"><a href="javascript:void(0)">View All</a></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="card files-info">
                <div class="card-content">
                  <div class="content-logo d-flex align-items-center justify-content-center position-relative">
                    <div class="sidebar-top-icon">
                      <span class="feather icon-more-vertical text-muted" id="dropdownMenuLinkfile2" data-toggle="dropdown" role="button" aria-expanded="false">
                      </span>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLinkfile2">
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                      </div>
                    </div>
                    <div class="logo">
                      <img class="d-block mx-auto" src="{{asset('images/icons/file-icons/psd.png')}}" height="38" alt="Card image cap">
                    </div>
                  </div>
                  <div class="card-body py-75">
                    <div class="app-file-name small font-weight-bold">Landing-designs.psd</div>
                    <div class="app-file-size small text-muted mb-25">12.85kb</div>
                    <div class="app-file-last-access small text-muted">Last accessed : 3 hours
                      ago</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card files-info">
                <div class="card-content">
                  <div class="content-logo d-flex align-items-center justify-content-center position-relative">
                    <div class="sidebar-top-icon">
                      <span class="feather icon-more-vertical text-muted" id="dropdownMenuLinkfile3" data-toggle="dropdown" role="button" aria-expanded="false">
                      </span>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLinkfile3">
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                      </div>
                    </div>
                    <div class="logo">
                      <img class="d-block mx-auto" src="{{asset('images/icons/file-icons/pdf.png')}}" height="38" alt="Card image cap">
                    </div>
                  </div>
                  <div class="card-body py-75">
                    <div class="app-file-name small font-weight-bold">SEO-analysis.pdf</div>
                    <div class="app-file-size small text-muted mb-25">1.5mb</div>
                    <div class="app-file-last-access small text-muted">Last accessed : 6 hours ago</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card files-info">
                <div class="card-content">
                  <div class="content-logo d-flex align-items-center justify-content-center position-relative">
                    <div class="sidebar-top-icon">
                      <span class="feather icon-more-vertical text-muted" id="dropdownMenuLinkfile4" data-toggle="dropdown" role="button" aria-expanded="false">
                      </span>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLinkfile4">
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                      </div>
                    </div>
                    <div class="logo">
                      <img class="d-block mx-auto" src="{{asset('images/icons/file-icons/doc.png')}}" height="38" alt="Card image cap">
                    </div>
                  </div>
                  <div class="card-body py-75">
                    <div class="app-file-name small font-weight-bold">Resumes.doc</div>
                    <div class="app-file-size small text-muted mb-25">12.55kb</div>
                    <div class="app-file-last-access small text-muted">Last accessed : 3 hours ago</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card files-info">
                <div class="card-content">
                  <div class="content-logo d-flex align-items-center justify-content-center position-relative">
                    <div class="sidebar-top-icon">
                      <span class="feather icon-more-vertical text-muted" id="dropdownMenuLinkfile5" data-toggle="dropdown" role="button" aria-expanded="false"></span>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLinkfile5">
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                      </div>
                    </div>
                    <div class="logo">
                      <img class="d-block mx-auto" src="{{asset('images/icons/file-icons/sketch.png')}}" height="38" alt="Card image cap">
                    </div>
                  </div>
                  <div class="card-body py-75">
                    <div class="app-file-name small font-weight-bold">Sketch components</div>
                    <div class="app-file-size small text-muted mb-25">2.85MB</div>
                    <div class="app-file-last-access small text-muted">Last accessed : 1 hours ago</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- files area starts ends -->

        <!-- folders area starts here -->
        <div class="folders-cards">
          <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-between mb-75">
                <span class="font-medium-3"> Folders </span>
                <span class="font-medium-2"><a href="javascript:void(0)">View All</a></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-content py-50 px-1 folder-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><i class="feather icon-folder font-medium-5"></i></span>
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Trina Lynes" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lilian Nenez" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Alberto Glotzbach" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-3.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </div>
                    <h6 class="font-medium-2 mb-0">Analytics</h6>
                  <div class="text-small-3 text-muted">15 files</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-content py-50 px-1 folder-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><i class="feather icon-folder font-medium-5"></i></span>
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Trina Lynes" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="George Nordic" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-5.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </div>
                    <h6 class="font-medium-2 mb-0">Assets</h6>
                  <div class="text-small-3 text-muted">355 files</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-content py-50 px-1 folder-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><i class="feather icon-folder font-medium-5"></i></span>
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lilian Nenez" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Alberto Glotzbach" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-3.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="George Nordic" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-5.jpg')}}" alt="Avatar" height="30"
                          width="30">
                      </li>
                    </ul>
                  </div>
                    <h6 class="font-medium-2 mb-0">Marketing</h6>
                  <div class="text-small-3 text-muted">143 files</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-content py-50 px-1 folder-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><i class="feather icon-folder font-medium-5"></i></span>
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lilian Nenez" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </div>
                    <h6 class="font-medium-2 mb-0">Trending</h6>
                  <div class="text-small-3 text-muted">15 files</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-content py-50 px-1 folder-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><i class="feather icon-folder font-medium-5"></i></span>
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Trina Lynes" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-4.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </div>
                   <h6 class="font-medium-2 mb-0">Medical</h6>
                  <div class="text-small-3 text-muted">355 files</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-content py-50 px-1 folder-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><i class="feather icon-folder font-medium-5"></i></span>
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Trina Lynes" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lilian Nenez" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-4.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </div>
                    <h6 class="font-medium-2 mb-0">SEO</h6>
                  <div class="text-small-3 text-muted">193 files</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-content py-50 px-1 folder-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><i class="feather icon-folder font-medium-5"></i></span>
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Trina Lynes" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-4.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </div>
                    <h6 class="font-medium-2 mb-0">Medical</h6>
                  <div class="text-small-3 text-muted">355 files</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-content py-50 px-1 folder-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><i class="feather icon-folder font-medium-5"></i></span>
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Trina Lynes" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lilian Nenez" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="{{asset('images/portrait/small/avatar-s-4.jpg')}}" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </div>
                    <h6 class="font-medium-2 mb-0">Networking</h6>
                  <div class="text-small-3 text-muted">193 files</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- folders area  ends here -->

        <!-- recent files table starts here -->
        <div class="recent-files">
          <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-between">
                <span class="font-medium-3"> Recent Files </span>
                <span class="font-medium-2"><a href="javascript:void(0)">View All</a></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div id="data-list-view">
                <!-- DataTable starts -->
                <div class="table-responsive">
                  <table class="table data-list-view">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Members</th>
                        <th class="text-truncate">Last Modified</th>
                        <th class="text-truncate">Sizes</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-50 font-medium-1 text-truncate">
                          <img src="{{asset('images/icons/file-icons/doc.png')}}" class="mr-50" alt="documents_icons" height="25">
                          Competitor Analysis documents
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">Only You</td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">Sep 3, 2019
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">2.5GB</td>
                        <td class="py-50 font-medium-1 text-truncate overflow-visible">
                          <div class="dropdown-items-wrapper">
                            <span class="feather icon-more-vertical" id="dropdownMenuLink4" data-toggle="dropdown" role="button" aria-expanded="false">
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink4">
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-50 font-medium-1 text-truncate">
                          <img src="{{asset('images/icons/file-icons/pdf.png')}}" class="mr-50" alt="pdf_icon" height="25">
                          All the Case Studies for our new projects
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">3 Members</td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">Jun 12, 2019
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">3.6 GB</td>
                        <td class="py-50 font-medium-1 text-truncate overflow-visible">
                          <div class="dropdown-items-wrapper">
                            <span class="feather icon-more-vertical" id="dropdownMenuLink5" data-toggle="dropdown" role="button" aria-expanded="false"></span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink5">
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-50 font-medium-1 text-truncate">
                          <img src="{{asset('images/icons/file-icons/psd.png')}}" class="mr-50" alt="imgs_icons" height="25">
                          Landing page sample PSDs
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">10 Members</td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">Jul 18, 2019
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">1.5 GB</td>
                        <td class="py-50 font-medium-1 text-truncate overflow-visible">
                          <div class="dropdown-items-wrapper">
                            <span class="feather icon-more-vertical" id="dropdownMenuLink6" data-toggle="dropdown" role="button" aria-expanded="false">
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink6">
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-50 font-medium-1 text-truncate">
                          <img src="{{asset('images/icons/file-icons/doc.png')}}" class="mr-50" alt="documents_icons" height="25">
                          Annual cost for Hardwares
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">5 members</td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">Aug 18, 2019
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">2.7 GB</td>
                        <td class="py-50 font-medium-1 text-truncate overflow-visible">
                          <div class="dropdown-items-wrapper">
                            <span class="feather icon-more-vertical" id="dropdownMenuLink7" data-toggle="dropdown" role="button" aria-expanded="false">
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink7">
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-50 font-medium-1 text-truncate">
                          <img src="{{asset('images/icons/file-icons/sketch.png')}}" class="mr-50" alt="documents_icons" height="25">
                          Template component sample Sketch files
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">7 members</td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">Sep 8, 2019
                        </td>
                        <td class="py-50 font-medium-1 text-truncate text-muted">5.6 GB</td>
                        <td class="py-50 font-medium-1 text-truncate overflow-visible">
                          <div class="dropdown-items-wrapper">
                            <span class="feather icon-more-vertical" id="dropdownMenuLink8" data-toggle="dropdown" role="button" aria-expanded="false">
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink8">
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-plus"></i> Add</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-edit-2"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0)"> <i class="feather icon-trash"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- DataTable ends -->
              </div>
            </div>
          </div>
        </div>
        <!-- recent files table ends here -->

        <!-- right side bar starts here -->
        <div class="right-sidebar">
          <div class="card mb-0">
            <div class="card-body">
                <div class="d-flex justify-content-between border-bottom pb-1">
                  <span class="font-weight-bold font-medium-2">Document.pdf</span>
                  <span>
                    <i class="feather icon-trash mr-1 font-medium-3"></i>
                    <i class="feather icon-x sidebar-close-icon font-medium-3"></i>
                  </span>
                </div>
              <ul class="nav nav-tabs mt-50" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class=" nav-link active d-flex align-items-center pl-0" id="details-tab" data-toggle="tab" href="#details" aria-controls="details" role="tab" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="activity-tab" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Activity</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane active" id="details" aria-labelledby="details-tab" role="tabpanel">
                  <div class="border-bottom d-flex align-items-center flex-column pb-1">
                    <img src="{{asset('images/icons/file-icons/pdf.png')}}" alt="PDF" height="42" width="35" class="my-1">
                    <p class="mt-2">15.3mb</p>
                  </div>
                  <div class="card-content pt-2 height-100">
                    <label class="app-file-label font-weight-bold text-muted font-medium-3 pl-0">Setting</label>
                    <div class="d-flex justify-content-between align-items-center mt-75">
                      <p>File Sharing</p>
                      <div
                        class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline mr-0">
                        <input type="checkbox" class="custom-control-input" id="customSwitchGlow1">
                        <label class="custom-control-label" for="customSwitchGlow1"></label>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p>Synchronization</p>
                      <div
                        class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline mr-0">
                        <input type="checkbox" class="custom-control-input" id="customSwitchGlow2" checked>
                        <label class="custom-control-label" for="customSwitchGlow2"></label>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <p>Backup</p>
                      <div
                        class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline mr-0">
                        <input type="checkbox" class="custom-control-input" id="customSwitchGlow3">
                        <label class="custom-control-label" for="customSwitchGlow3"></label>
                      </div>
                    </div>

                    <label class="app-file-label font-weight-bold text-muted font-medium-3 pl-0">Info</label>
                    <div class="d-flex justify-content-between align-items-center mt-75">
                      <p>Type</p>
                      <p class="font-weight-bold">PDF</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p>Size</p>
                      <p class="font-weight-bold">15.6mb</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p>Location</p>
                      <p class="font-weight-bold">Files > Documents</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p>Owner</p>
                      <p class="font-weight-bold">Elnora Reese</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p>Modified</p>
                      <p class="font-weight-bold">September 4 2019</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p>Opened</p>
                      <p class="font-weight-bold">July 8, 2019</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p>Created</p>
                      <p class="font-weight-bold">July 1, 2019</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                  <div class="card-content pt-2">
                    <ul class="activity-timeline timeline-left timeline-no-icon list-unstyled">
                      <li>
                        <div class="timeline-icon bg-primary">
                        </div>
                        <div class="timeline-info">
                          <div class="d-flex justify-content-between"> <span class="font-weight-bold mb-0">Competitor Analysis docs</span>
                             <small class="">23 days ago</small>
                          </div>
                          <span class="font-small-3">files related to the Competitor Analysis</span>
                          <div class="my-50"><img src="{{asset('images/icons/file-icons/doc.png')}}" alt="documnet icon png" height="30">
                            <span class="text-muted font-weight-bold ml-1">analysis.pdf</span>
                          </div>
                        </div>
                      </li>
                      <li class="mt-3">
                        <div class="timeline-icon bg-warning">
                        </div>
                        <div class="timeline-info">
                          <div class="d-flex justify-content-between"> <span class="font-weight-bold mb-0">Case studies</span>
                            <small class="">53 days ago</small>
                          </div>
                          <span class="font-small-3">some files got updated regarding case studies</span>
                          <div class="my-50"><img src="{{asset('images/icons/file-icons/pdf.png')}}" alt="documnet icon png" height="30">
                            <span class="text-muted font-weight-bold ml-1">casefiles.pdf</span>
                          </div>
                        </div>
                      </li>
                      <li class="mt-3">
                        <div class="timeline-icon bg-danger">
                        </div>
                        <div class="timeline-info">
                          <div class="d-flex justify-content-between"> <span class="font-weight-bold mb-0">Cost of Hardware</span>
                            <small class="">5 days ago</small> </div>
                          <span class="font-small-3">new hardware cost updated</span>
                          <div class="my-50"><img src="{{asset('images/icons/file-icons/doc.png')}}" alt="documnet icon png" height="30">
                            <span class="text-muted font-weight-bold ml-1">hardware.doc</span>
                          </div>
                        </div>
                      </li>
                      <li class="mt-3">
                        <div class="timeline-icon bg-success">
                        </div>
                        <div class="timeline-info">
                          <div class="d-flex justify-content-between"> <span class="font-weight-bold mb-0">Sketch files of components</span>
                            <small class="">12 days ago</small> </div>
                          <span class="font-small-3">25 new files of components</span>
                          <div class="my-50"><img src="{{asset('images/icons/file-icons/sketch.png')}}" alt="documnet icon png" height="30">
                            <span class="text-muted font-weight-bold ml-1">comps.sketch</span>
                          </div>
                        </div>
                      </li>
                      <li class="mt-3">
                        <div class="timeline-icon bg-primary">
                        </div>
                        <div class="timeline-info">
                          <div class="d-flex justify-content-between"> <span class="font-weight-bold mb-0">Digital Marketing data</span>
                            <small class="">10 days ago</small>
                          </div>
                          <span class="font-small-3">data regarding new tech stacks</span>
                          <div class="my-50"><img src="{{asset('images/icons/file-icons/pdf.png')}}" alt="documnet icon png" height="30">
                             <span class="text-muted font-weight-bold ml-1">marketing.pdf</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
        <!-- right side bar ends here -->
    </div>
      <!-- bottom content ends -->
</div>
<!-- file manager app content ends -->
@endsection
@section('vendor-script')
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
@endsection
{{-- page styles --}}
@section('page-script')
<script src="{{asset('js/scripts/pages/app-file-manager.js')}}"></script>
@endsection