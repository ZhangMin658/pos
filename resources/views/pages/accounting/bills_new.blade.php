
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')
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
                  <h4 class="card-title">New Biller</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" action="{{ route('account.save')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Biller Name</label>
                                        <input type="text"  class="form-control"  name="account_name">
                                        @if ($errors->has('account_name'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('account_name')}}</small>
                                        @endif
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Biller Type</label>
                                        <input type="text" class="form-control" name="account_iban" >
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Biller Number/id</label>
                                        <input type="text" class="form-control" name="account_iban" >
                                      </div>
                                      
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Amount</label>
                                        <input type="text" class="form-control" name="account_iban" >
                                      </div>
                                      
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Repeat</label>
                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                                   <option value="square" data-select2-id="301">Never</option>
                                                <option value="square" data-select2-id="302">Every Day</option>
                                                <option value="square" data-select2-id="303">Every Week</option>
                                                <option value="square" data-select2-id="304">Every Month</option>
                                                <option value="square" data-select2-id="305">Every Year</option>
                                                <option value="square" data-select2-id="306">Custom</option>
                                        </select>
                                      </div>
                                      
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Starting date</label>
                                        <input type="text" class="form-control" name="account_iban" >
                                      </div>
                                      
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Ending date</label>
                                        <input type="text" class="form-control" name="account_iban" >
                                      </div>
                                    </div>
                            <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Contract</label>
                                        <input type="file" class="form-control" name="account_iban" >
                                      </div>
                                      
                                  </div>

                  <div class="col-md-6 col-12">
                  
                                      <div class="form-group">
                                        <label>Date  (if Custom)</label>
                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                   <option value="square" data-select2-id="301">1</option>
                                               <option value="square" data-select2-id="302">2</option>
                                               <option value="square" data-select2-id="303">3</option>
                                               <option value="square" data-select2-id="304">4</option>
                                               <option value="square" data-select2-id="305">5</option>
                                               <option value="square" data-select2-id="306">6</option>
                                               <option value="square" data-select2-id="307">7</option>
                                               <option value="square" data-select2-id="308">8</option>
                                               <option value="square" data-select2-id="309">9</option>
                                               <option value="square" data-select2-id="310">10</option>
                                               <option value="square" data-select2-id="311">11</option>
                                               <option value="square" data-select2-id="312">12</option>
                                               <option value="square" data-select2-id="313">13</option>
                                               <option value="square" data-select2-id="314">14</option>
                                               <option value="square" data-select2-id="315">15</option>
                                               <option value="square" data-select2-id="316">16</option>
                                               <option value="square" data-select2-id="317">17</option>
                                               <option value="square" data-select2-id="318">18</option>
                                               <option value="square" data-select2-id="319">19</option>
                                               <option value="square" data-select2-id="320">20</option>
                                               <option value="square" data-select2-id="321">21</option>
                                               <option value="square" data-select2-id="322">22</option>
                                               <option value="square" data-select2-id="323">23</option>
                                               <option value="square" data-select2-id="324">24</option>
                                               <option value="square" data-select2-id="325">25</option>
                                               <option value="square" data-select2-id="326">26</option>
                                               <option value="square" data-select2-id="327">27</option>
                                               <option value="square" data-select2-id="328">28</option>
                                               <option value="square" data-select2-id="329">29</option>
                                               <option value="square" data-select2-id="330">30</option>
                                               <option value="square" data-select2-id="331">31</option>
                                        </select>
                                      </div>
                                      
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Every  (if Custom)</label>
                                            <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							                                <option value="square" data-select2-id="301">Day</option>
                                              <option value="square" data-select2-id="302">Week</option>
                                              <option value="square" data-select2-id="303">Month</option>
                                              <option value="square" data-select2-id="304">Year</option>
                                            </select>
                                      </div>
                                      
                                  </div>
                                    <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Repeat Until  (if Custom)</label>
                                        <input type="text" class="form-control" name="account_iban" >
                                      </div>
                                    </div>

                <div class="col-12">
                                     <button type="submit" class="btn btn-success mr-1 mb-1">Save</button>
                                     <a href="bank-account-list"  class="btn btn-info mr-1 mb-1">Back to List</a>
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
