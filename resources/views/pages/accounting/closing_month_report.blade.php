
@extends('layouts/contentLayoutMaster')

@section('title', 'Bootstrap Tables')

@section('content')



<div class="col-md-12 col-12">
<div class="row">
                <div class="col-12 d-flex justify-content-end" >
                <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Back</button>
                 <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Print</button>
                 <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Confirm & Generate <i class="fas fa-angle-double-right"></i></button>
                </div>
              </div>
<!-- Basic Tables start -->
<div class="row" id="basic-table">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Closgin Report   From: 00/00/2020 - To: 00/00/2020</h4>
              <div class="">June 2020</div>
          </div>
<hr>
          <div class="card-content">
              <div class="card-body" align="center">
                  
                  <h4 class="card-title">** Sales & Income **</h4>    
                  <!-- Table with outer spacing -->
                  <div class="table-responsive">
                   <div class="col-12">
                      <table class="table">
                          <thead>
                              <tr>
                               <th>Description</th>
                               <th style="text-align: right;">Total</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                               <td>Sales (Cash)</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                             <tr>
                               <td>Sales (Card)</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                            <tr>
                               <td>Sales (Beneift Pay)</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                            <tr>
                               <td>Sales (Cheque)</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                          </tbody>
                          <tfoot>
                                      <tr>
                                      <th rowspan="1" colspan="1">Total</th>
                                      <th rowspan="1" colspan="1" style="text-align: right;">0.000</th>
                                      
                                      </tr>
                                  </tfoot>
                      </table>
                  </div>
                   <h4 class="card-title">** Expenses **</h4>    
                  <div class="col-12">
                      <table class="table">
                          <thead>
                              <tr>
                               <th>Description</th>
                               <th style="text-align: right;">Total</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                               <td>Salary</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                             <tr>
                               <td>EWA</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                            <tr>
                               <td>STC Mobile (33733886)</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                            <tr>
                               <td>Internet</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                          </tbody>
                          <tfoot>
                                      <tr>
                                      <th rowspan="1" colspan="1">Total</th>
                                      <th rowspan="1" colspan="1" style="text-align: right;">0.000</th>
                                      
                                      </tr>
                                  </tfoot>
                      </table>
                  </div>


<h4 class="card-title">** Profit & Loss **</h4>    
                  <div class="col-12">
                      <table class="table">
                          <thead>
                              <tr>
                               <th>Description</th>
                               <th style="text-align: right;">Total</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                               <td>Total Sales</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                             <tr>
                               <td>Total Expenses</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                            <tr>
                               <td>Total Discounts</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                            <tr>
                               <td>Total VAT</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                            <tr>
                               <td>Total Receiving</td>
                               <td style="text-align: right;">0.000</td>
                            </tr>
                            
                           
                          </tbody>
                          <tfoot>
                                      <tr>
                                      <th rowspan="1" colspan="1">Total Profit</th>
                                      <th rowspan="1" colspan="1" style="text-align: right;">0.000</th>
                                      
                                      </tr>
                                  </tfoot>
                      </table>
                  </div>



                  </div>
              </div>
           

              
          </div>
      </div>
  </div>
</div>
<!-- Basic Tables end -->


</div>
<!-- Basic Tables end -->
</div>
</div>



@endsection
