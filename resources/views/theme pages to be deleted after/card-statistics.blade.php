@extends('layouts/contentLayoutMaster')

@section('title', 'Statistics Card')

@section('vendor-style')
        {{-- Vendor Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/card-analytics.css')) }}">
@endsection
@section('content')
{{-- Statistics card section start --}}
<section id="statistics-card">
    
    <div class="row">
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                  <div class="avatar-content">
                    <i class="feather icon-eye text-info font-medium-5"></i>
                  </div>
                </div>
                <h2 class="text-bold-700">36.9k</h2>
                <p class="mb-0 line-ellipsis">Views</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                  <div class="avatar-content">
                    <i class="feather icon-message-square text-warning font-medium-5"></i>
                  </div>
                </div>
                <h2 class="text-bold-700">12k</h2>
                <p class="mb-0 line-ellipsis">Comments</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                  <div class="avatar-content">
                    <i class="feather icon-shopping-bag text-danger font-medium-5"></i>
                  </div>
                </div>
                <h2 class="text-bold-700">97.8k</h2>
                <p class="mb-0 line-ellipsis">Orders</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                  <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                    <div class="avatar-content">
                        <i class="feather icon-heart text-primary font-medium-5"></i>
                    </div>
                  </div>
                  <h2 class="text-bold-700">26.8</h2>
                <p class="mb-0 line-ellipsis">Bookmarks</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                  <div class="avatar-content">
                    <i class="feather icon-award text-success font-medium-5"></i>
                  </div>
                </div>
                <h2 class="text-bold-700">689</h2>
                <p class="mb-0 line-ellipsis">Reviews</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body">
                <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                  <div class="avatar-content">
                    <i class="feather icon-truck text-danger font-medium-5"></i>
                  </div>
                </div>
                <h2 class="text-bold-700">2.1k</h2>
                <p class="mb-0 line-ellipsis">Returns</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700 mb-0">86%</h2>
                        <p>CPU Usage</p>
                    </div>
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-cpu text-primary font-medium-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700 mb-0">1.2gb</h2>
                        <p>Memory Usage</p>
                    </div>
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-server text-success font-medium-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700 mb-0">0.1%</h2>
                        <p>Downtime Ratio</p>
                    </div>
                    <div class="avatar bg-rgba-danger p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-activity text-danger font-medium-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700 mb-0">13</h2>
                        <p>Issues Found</p>
                    </div>
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-alert-octagon text-warning font-medium-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-users text-primary font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">92.6k</h2>
                    <p class="mb-0">Subscribers Gained</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-credit-card text-success font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">97.5k</h2>
                    <p class="mb-0">Revenue Generated</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-2"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-danger p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">36%</h2>
                    <p class="mb-0">Quarterly Sales</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">97.5K</h2>
                    <p class="mb-0">Orders Received</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">78.9k</h2>
                        <p class="mb-0">Site Traffic</p>
                    </div>
                    <div class="avatar bg-rgba-primary p-50">
                        <div class="avatar-content">
                            <i class="feather icon-monitor text-primary font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-5"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">659.8k</h2>
                        <p class="mb-0">Active Users</p>
                    </div>
                    <div class="avatar bg-rgba-success p-50">
                        <div class="avatar-content">
                            <i class="feather icon-user-check text-success font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-6"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">28.7k</h2>
                        <p class="mb-0">Newsletter</p>
                    </div>
                    <div class="avatar bg-rgba-warning p-50">
                        <div class="avatar-content">
                            <i class="feather icon-mail text-warning font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-7"></div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- // Statistics Card section end--}}
@endsection
@section('vendor-script')
{{-- Vendor js files --}}
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/cards/card-statistics.js')) }}"></script>
@endsection
