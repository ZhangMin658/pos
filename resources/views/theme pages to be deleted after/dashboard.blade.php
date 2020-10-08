
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/tether-theme-arrows.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/tether.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/shepherd-theme-default.css')) }}">
         
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/dashboard-analytics.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/card-analytics.css')) }}">

  @endsection

  @section('content')
  <div class="d-flex justify-content-end">
 
<button type="button" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Clock Out</button>

</div>
             
 
             
                 
    {{-- Dashboard Analytics Start --}}
    <section id="dashboard-analytics">
<div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather fas fa-shopping-cart text-primary font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">0</h2>
                    <p class="mb-0">TOTAL SALES</p>
                </div>
              
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather fas fa-users text-success font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">0</h2>
                    <p class="mb-0">TOTAL CUSTOMERS</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-success   p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather fas fa-boxes text-success font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">0</h2>
                    <p class="mb-0">TOTAL PRODUCTS</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather fas fa-truck text-success font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">0</h2>
                    <p class="mb-0">TOTAL DELIVERY</p>
                </div>
            </div>
        </div>
      </div>
       <!-- Line Area Chart -->
   <div class="row">
   <button type="button" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">POS</button>
   <button type="button" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Attends</button>
   <button type="button" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Reports</button>
   <button type="button" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Deliveries</button>
   <button type="button" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Customer</button>
   <button type="button" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Online Orders</button>
   </div>

      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sales vs Expances</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="line-area-chart"></div>
          </div>
        </div>
      </div>
    
      <div class="row">
          <div class="col-md-8 col-12">
            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Sales by quantity</h4>
              </div>
              <div class="card-content">
                  <div class="card-body pl-0">
                      <div class=""><div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                      <div class="">
                      </div>
                      </div><div class="chartjs-size-monitor-shrink">
                      <div class="">
                      </div>
                      </div>
                      </div>
                          <canvas id="bar-chart"   class="chartjs-render-monitor" style="display: block;"></canvas>
                      </div>
                  </div>
              </div>
          </div>
          </div>
  
 
 <div class="col-lg-4 col-md-6 col-12">
              <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-end">
                      <h4 class="mb-0">Monthly Target</h4>
                      
                  </div>
                  <div class="card-content">
                      <div class="card-body px-0 pb-0" style="position: relative;">
                          <div id="goal-overview-chart" class="mt-75" style="min-height: 203.333px;"><div id="apexcharts2vl0cvc6" class="apexcharts-canvas apexcharts2vl0cvc6 light" style="width: 508px; height: 203.333px;"><svg id="SvgjsSvg2066" width="508" height="203.33333333333334" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2068" class="apexcharts-inner apexcharts-graphical" transform="translate(146.5, 0)"><defs id="SvgjsDefs2067"><clipPath id="gridRectMask2vl0cvc6"><rect id="SvgjsRect2069" width="217" height="217" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask2vl0cvc6"><rect id="SvgjsRect2070" width="217" height="217" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient2076" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2077" stop-opacity="1" stop-color="rgba(0,181,181,1)" offset="0"></stop><stop id="SvgjsStop2078" stop-opacity="1" stop-color="rgba(185,195,205,1)" offset="1"></stop><stop id="SvgjsStop2079" stop-opacity="1" stop-color="rgba(185,195,205,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2086" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2087" stop-opacity="1" stop-color="rgba(0,181,181,1)" offset="0"></stop><stop id="SvgjsStop2088" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="1"></stop><stop id="SvgjsStop2089" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter2289" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood2290" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood2290Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2291" in="SvgjsFeFlood2290Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2291Out"></feComposite><feOffset id="SvgjsFeOffset2292" dx="1" dy="1" result="SvgjsFeOffset2292Out" in="SvgjsFeComposite2291Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2293" stdDeviation="3 " result="SvgjsFeGaussianBlur2293Out" in="SvgjsFeOffset2292Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2294" result="SvgjsFeMerge2294Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2295" in="SvgjsFeGaussianBlur2293Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2296" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2297" in="SourceGraphic" in2="SvgjsFeMerge2294Out" mode="normal" result="SvgjsFeBlend2297Out"></feBlend></filter></defs><g id="SvgjsG2072" class="apexcharts-radialbar"><g id="SvgjsG2073"><g id="SvgjsG2074" class="apexcharts-tracks"><g id="SvgjsG2075" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 60.73749999999996 188.4950258889396 A 93.52499999999999 93.52499999999999 0 1 1 154.2625 188.4950258889396" fill="none" fill-opacity="1" stroke="rgba(185,195,205,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.825" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 60.73749999999996 188.4950258889396 A 93.52499999999999 93.52499999999999 0 1 1 154.2625 188.4950258889396"></path></g></g><g id="SvgjsG2081"><g id="SvgjsG2085" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2090" d="M 60.73749999999996 188.4950258889396 A 93.52499999999999 93.52499999999999 0 1 1 199.87355205416026 122.13053334288759" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2086)" stroke-opacity="1" stroke-linecap="round" stroke-width="7.65" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="249" data:value="83" index="0" j="0" data:pathOrig="M 60.73749999999996 188.4950258889396 A 93.52499999999999 93.52499999999999 0 1 1 199.87355205416026 122.13053334288759" filter="url(#SvgjsFilter2289)"></path></g><circle id="SvgjsCircle2082" r="86.6125" cx="107.5" cy="107.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2083" class="apexcharts-datalabels-group" transform="translate(0, 0)" style="opacity: 1;"><text id="SvgjsText2084" font-family="Helvetica, Arial, sans-serif" x="107.5" y="125.5" text-anchor="middle" dominant-baseline="auto" font-size="4rem" font-weight="regular" fill="#99a2ac" class="apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">83%</text></g></g></g></g><line id="SvgjsLine2101" x1="0" y1="0" x2="215" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2102" x1="0" y1="0" x2="215" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                          <div class="row text-center mx-0">
                              <div class="col-6 border-top border-right d-flex align-items-between flex-column py-1">
                                  <p class="mb-50">Total Sales</p>
                                  <p class="font-large-1 text-bold-700">590.000</p>
                              </div>
                              <div class="col-6 border-top d-flex align-items-between flex-column py-1">
                                  <p class="mb-50">Target</p>
                                  <p class="font-large-1 text-bold-700">345.000</p>
                              </div>
                          </div>
                      <div class="resize-triggers"><div class="expand-trigger"><div style="width: 509px; height: 328px;"></div></div><div class="contract-trigger"></div></div></div>
                  </div>
              </div>
          </div>



      </div>
      <div class="row match-height">
          <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4>Payment Method</h4>
                    
                </div>
                <div class="card-content">
                    <div class="card-body pt-0" style="position: relative;">
                        <div id="session-chart" class="mb-1" style="min-height: 294.927px;"><div id="apexchartst2172mm1" class="apexcharts-canvas apexchartst2172mm1 light" style="width: 466px; height: 294.927px;"><svg id="SvgjsSvg2199" width="466" height="294.9268292682927" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2201" class="apexcharts-inner apexcharts-graphical" transform="translate(100, 0)"><defs id="SvgjsDefs2200"><clipPath id="gridRectMaskt2172mm1"><rect id="SvgjsRect2202" width="268" height="290" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskt2172mm1"><rect id="SvgjsRect2203" width="270" height="292" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><radialGradient id="SvgjsRadialGradient2210" gradientUnits="userSpaceOnUse" cx="134" cy="145" r="137.46341463414635"><stop id="SvgjsStop2211" stop-opacity="1" stop-color="rgba(115,103,240,1)" offset="0.7"></stop><stop id="SvgjsStop2212" stop-opacity="1" stop-color="rgba(169,162,246,1)" offset="0.98"></stop><stop id="SvgjsStop2213" stop-opacity="1" stop-color="rgba(169,162,246,1)" offset="1"></stop></radialGradient><radialGradient id="SvgjsRadialGradient2216" gradientUnits="userSpaceOnUse" cx="134" cy="145" r="137.46341463414635"><stop id="SvgjsStop2217" stop-opacity="1" stop-color="rgba(255,159,67,1)" offset="0.7"></stop><stop id="SvgjsStop2218" stop-opacity="1" stop-color="rgba(255,192,133,1)" offset="0.98"></stop><stop id="SvgjsStop2219" stop-opacity="1" stop-color="rgba(255,192,133,1)" offset="1"></stop></radialGradient><radialGradient id="SvgjsRadialGradient2222" gradientUnits="userSpaceOnUse" cx="134" cy="145" r="137.46341463414635"><stop id="SvgjsStop2223" stop-opacity="1" stop-color="rgba(234,84,85,1)" offset="0.7"></stop><stop id="SvgjsStop2224" stop-opacity="1" stop-color="rgba(242,146,146,1)" offset="0.98"></stop><stop id="SvgjsStop2225" stop-opacity="1" stop-color="rgba(242,146,146,1)" offset="1"></stop></radialGradient></defs><g id="SvgjsG2205" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG2206" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle2207" r="89.35121951219513" cx="134" cy="145" fill="transparent"></circle><g id="SvgjsG2208" class="apexcharts-slices"><g id="SvgjsG2209" class="apexcharts-series apexcharts-pie-series" seriesName="Desktop" rel="1" data:realIndex="0"><path id="SvgjsPath2214" d="M 134 7.536585365853654 A 137.46341463414635 137.46341463414635 0 1 1 63.28338506359583 262.87854230018104 L 88.03420029133729 221.62105249511768 A 89.35121951219513 89.35121951219513 0 1 0 134 55.64878048780487 L 134 7.536585365853654 z" fill="url(#SvgjsRadialGradient2210)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="210.96" data:startAngle="0" data:strokeWidth="0" data:value="58.6" data:pathOrig="M 134 7.536585365853654 A 137.46341463414635 137.46341463414635 0 1 1 63.28338506359583 262.87854230018104 L 88.03420029133729 221.62105249511768 A 89.35121951219513 89.35121951219513 0 1 0 134 55.64878048780487 L 134 7.536585365853654 z"></path></g><g id="SvgjsG2215" class="apexcharts-series apexcharts-pie-series" seriesName="Mobile" rel="2" data:realIndex="1"><path id="SvgjsPath2220" d="M 63.28338506359583 262.87854230018104 A 137.46341463414635 137.46341463414635 0 0 1 79.40669483859459 18.84231535719711 L 98.51435164508649 62.997504982178114 A 89.35121951219513 89.35121951219513 0 0 0 88.03420029133729 221.62105249511768 L 63.28338506359583 262.87854230018104 z" fill="url(#SvgjsRadialGradient2216)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="125.64000000000001" data:startAngle="210.96" data:strokeWidth="0" data:value="34.9" data:pathOrig="M 63.28338506359583 262.87854230018104 A 137.46341463414635 137.46341463414635 0 0 1 79.40669483859459 18.84231535719711 L 98.51435164508649 62.997504982178114 A 89.35121951219513 89.35121951219513 0 0 0 88.03420029133729 221.62105249511768 L 63.28338506359583 262.87854230018104 z"></path></g><g id="SvgjsG2221" class="apexcharts-series apexcharts-pie-series" seriesName="Tablet" rel="3" data:realIndex="2"><path id="SvgjsPath2226" d="M 79.40669483859459 18.84231535719711 A 137.46341463414635 137.46341463414635 0 0 1 133.9760081082578 7.536587459541181 L 133.98440527036755 55.64878184870176 A 89.35121951219513 89.35121951219513 0 0 0 98.51435164508649 62.997504982178114 L 79.40669483859459 18.84231535719711 z" fill="url(#SvgjsRadialGradient2222)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="23.399999999999977" data:startAngle="336.6" data:strokeWidth="0" data:value="6.5" data:pathOrig="M 79.40669483859459 18.84231535719711 A 137.46341463414635 137.46341463414635 0 0 1 133.9760081082578 7.536587459541181 L 133.98440527036755 55.64878184870176 A 89.35121951219513 89.35121951219513 0 0 0 98.51435164508649 62.997504982178114 L 79.40669483859459 18.84231535719711 z"></path></g></g></g></g><line id="SvgjsLine2227" x1="0" y1="0" x2="268" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2228" x1="0" y1="0" x2="268" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 74.0469px; top: 79.4844px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(255, 159, 67);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Mobile: </span><span class="apexcharts-tooltip-text-value">34.9</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(255, 159, 67);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Mobile: </span><span class="apexcharts-tooltip-text-value">34.9</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(255, 159, 67);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Mobile: </span><span class="apexcharts-tooltip-text-value">34.9</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                        <div class="chart-info d-flex justify-content-between mb-1">
                            <div class="series-info d-flex align-items-center">
                                
                                <span class="text-bold-600 mx-50">Cash</span>
                                <span> - 58.6%</span>
                            </div>
                            
                        </div>
                        <div class="chart-info d-flex justify-content-between mb-1">
                            <div class="series-info d-flex align-items-center">
                                
                                <span class="text-bold-600 mx-50">Card</span>
                                <span> - 34.9%</span>
                            </div>
                           
                        </div>
                        <div class="chart-info d-flex justify-content-between mb-50">
                            <div class="series-info d-flex align-items-center">
                                
                                <span class="text-bold-600 mx-50">Benefit Pay</span>
                                <span> - 6.5%</span>
                            </div>
                           
                        </div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 509px; height: 426px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
        </div>
          <div class="col-lg-4 col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between pb-0">
                  <h4>Last Suspend sales</h4>
                  
              </div>
              <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Sales ID</th>
                                  <th>Customer Name</th>
                                  <th>Amount</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">0001</th>
                                  <td>Ali Ahmed</td>
                                  <td>1.000</td>
                                  <td>View</td>
                              </tr>
                              <tr>
                                  <th scope="row">0002</th>
                                  <td>Ali Ahmed</td>
                                  <td>1.000</td>
                                  <td>View</td>
                              </tr>
                              <tr>
                                  <th scope="row">0003</th>
                                  <td>Ali Ahmed</td>
                                  <td>1.000</td>
                                  <td>View</td>
                              </tr>
                               <tr>
                                  <th scope="row">0004</th>
                                  <td>Ali Ahmed</td>
                                  <td>1.000</td>
                                  <td>View</td>
                              </tr>
                               <tr>
                                  <th scope="row">0005</th>
                                  <td>Ali Ahmed</td>
                                  <td>1.000</td>
                                  <td>View</td>
                              </tr>
                               <tr>
                                  <th scope="row">0006</th>
                                  <td>Ali Ahmed</td>
                                  <td>1.000</td>
                                  <td>View</td>
                              </tr>
                               <tr>
                                  <th scope="row">0007</th>
                                  <td>Ali Ahmed</td>
                                  <td>1.000</td>
                                  <td>View</td>
                              </tr>
                               <tr>
                                  <th scope="row">0008</th>
                                  <td>Ali Ahmed</td>
                                  <td>1.000</td>
                                  <td>View</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
            </div>
          </div>
         <div class="col-lg-4 col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between pb-0">
                  <h4>Low Inventory</h4>
                  
              </div>
               <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Product Name</th>
                                  <th>Balance</th>
                                  
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">Perfume</th>
                                  <td>5</td>
                              </tr>
                              <tr>
                                  <th scope="row">Perfume</th>
                                  <td>5</td>
                              </tr>
                              <tr>
                                  <th scope="row">Perfume</th>
                                  <td>5</td>
                              </tr>
                               <tr>
                                  <th scope="row">Perfume</th>
                                  <td>5</td>
                              </tr>
                               <tr>
                                  <th scope="row">Perfume</th>
                                  <td>5</td>
                              </tr>
                              <tr>
                                  <th scope="row">Perfume</th>
                                  <td>5</td>
                              </tr>
                               <tr>
                                  <th scope="row">Perfume</th>
                                  <td>5</td>
                              </tr>
                              <tr>
                                  <th scope="row">Perfume</th>
                                  <td>5</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-12">
        

        
        </div>
      </div>
    </section>
  <!-- Dashboard Analytics end -->
  @endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/tether.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/shepherd.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/charts/chart.min.js')) }}"></script>
        
@endsection
@section('page-script')
        <!-- Page js files -->
        
        <script src="{{ asset(mix('js/scripts/charts/chart-chartjs.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
          <script src="{{ asset(mix('js/scripts/charts/chart-apex.js')) }}"></script>
           <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>
@endsection
