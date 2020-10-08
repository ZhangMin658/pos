
@extends('layouts/contentLayoutMaster')

@section('title', 'Bootstrap Tables')

@section('content')
<div class="row col-md-12 col-12">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card" >
                <div class="card-header d-flex flex-column align-items-start" style="padding: 0rem 1.5rem 0 !important;">
                    
                    <h2 class="text-bold-700 mt-1">0.000</h2>
                    <p class="mb-0">Total Income</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0" style="padding: 0rem 1.5rem 0 !important;">
                   
                    <h2 class="text-bold-700 mt-1">0.000</h2>
                    <p class="mb-0">Total Expance</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0" style="padding: 0rem 1.5rem 0 !important;">
                    
                    <h2 class="text-bold-700 mt-1">0.000</h2>
                    <p class="mb-0">Total VAT</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0" style="padding: 0rem 1.5rem 0 !important;">
                    
                    <h2 class="text-bold-700 mt-1">0.000</h2>
                    <p class="mb-0">Profit</p>
                </div>
            </div>
        </div>
      </div>
<div class="row col-md-12 col-12">

<div class="col-md-9 col-12">

<!-- Basic Tables start -->
<div class="row" id="basic-table">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Close</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  
                  <!-- Table with outer spacing -->
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Description</th>
                                  <th>Fix Amount</th>
                                  <th>Usage Amount</th>
                                  <th>Type</th>
                                  <th>Use Account</th>
                                  <th>VAT</th>
                                  <th>Total</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>EWA</td>
                                <td>20.000</td>
                                <td><input type="text" class="form-control" name="account_iban" value="0.000"></td>
                                <td>Bill</td>
                                <td><select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                  <option value="square" data-select2-id="301">Account A</option>
                                              <option value="square" data-select2-id="302">Acccount B</option>
                                              <option value="square" data-select2-id="303">Account C</option>
                                              <option value="square" data-select2-id="304">Account D</option>
                                            </select></td>
                                 <td>0.000</td>
                                <td>0.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Emp. Name</td>
                                <td>200.000</td>
                                <td>-</td>
                                <td>Salary</td>
                                <td><select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                  <option value="square" data-select2-id="301">Account A</option>
                                              <option value="square" data-select2-id="302">Acccount B</option>
                                              <option value="square" data-select2-id="303">Account C</option>
                                              <option value="square" data-select2-id="304">Account D</option>
                                            </select></td>
                                             <td>0.000</td>
                                <td>0.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>STC Mobile (33733886)</td>
                                <td>7.000</td>
                                <td><input type="text" class="form-control" name="account_iban" value="0.000"></td>
                                <td>Bill</td>
                                <td><select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                  <option value="square" data-select2-id="301">Account A</option>
                                              <option value="square" data-select2-id="302">Acccount B</option>
                                              <option value="square" data-select2-id="303">Account C</option>
                                              <option value="square" data-select2-id="304">Account D</option>
                                            </select></td>
                                             <td>0.000</td>
                                <td>0.000</td>
                            </tr>
                             </tbody>
                      </table>
                  </div>
              </div>
           

              
          </div>
      </div>
  </div>
</div>
<!-- Basic Tables end -->
</div>
<div class="col-md-3 col-12">
<!-- Basic Tables start -->

      <div class="card">
          <div class="card-header">
                <h1 class="card-title">Total</h1>
                <h2>0.000</h2>
          </div>
          <div class="card-body">
          <hr style="margin-top:-1rem !important;">
              
                  <h2 class="card-title">Account Deduction</h2><br>
                  <p><b>Account (A):</b>   0.000 BD</p>
                  <p Style="color:red;"><b>Account (B):</b>   0.000 BD<br>
                  <small>This account not have enough amount</small></p>
                  <p><b>Account (C):</b>   0.000 BD</p>
                  <p><b>Account (D):</b>   0.000 BD</p>
                  <p><b>Account (E):</b>   0.000 BD</p>
                   <hr>
                   <div class="card-header" style="margin-top:-1rem !important;">
                <h1 class="card-title">Balance</h1>
                <h2>0.000</h2>
              </div>    
                  
                   <hr>
                   <a href="closing_month_report">
                   <button type="submit" class="btn btn-success btn-block mr-1 mb-1">Submit & Next <i class="fas fa-angle-double-right"></i></button>
                   </a>
              </div>
           
        </div>
      </div>
</div>
<!-- Basic Tables end -->
</div>
</div>



@endsection
