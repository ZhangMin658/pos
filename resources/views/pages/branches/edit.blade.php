@extends('layouts/contentLayoutMaster')

@section('title', 'View Branch')
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
          <h4 class="card-title">View Branch</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form" action="{{route('branches.update',$branch->id)}}" method="POST">
              @csrf
              <input name="_method" value="PUT" type="hidden" />
              <div class="form-body">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Branch</label>
                      <input type="text" class="form-control {{ $errors->has('branch_name') ? 'is-invalid' : ''}}" name="branch_name" value="{{$branch->branch_name}}">
                      {!! $errors->first('branch_name', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Area</label>
                      <select id="area" class="select2 form-control {{ $errors->has('branch_area') ? 'is-invalid' : ''}} select2-hidden-accessible" value={{$branch->branch_area}} name="branch_area">
                        <option value="Manama" {{ $branch->branch_area === "Manama" ? "selected" : "" }} >Manama</option>
                        <option value="Manama Souq" {{ $branch->branch_area === "Manama Souq" ? "selected" : "" }} >Manama Souq</option>
                        <option value="Fareej el-Fadhel" {{ $branch->branch_area === "Fareej el-Fadhel" ? "selected" : "" }} >Fareej el-Fadhel</option>
                        <option value="Fareej el-Hammam" {{ $branch->branch_area === "Fareej el-Hammam" ? "selected" : "" }} >Fareej el-Hammam</option>
                        <option value="Fareej el-Hatab" {{ $branch->branch_area === "Fareej el-Hatab" ? "selected" : "" }} >Fareej el-Hatab</option>
                        <option value="Fareej el-Makharqa" {{ $branch->branch_area === "Fareej el-Makharqa" ? "selected" : "" }} >Fareej el-Makharqa</option>
                        <option value="Fareej Mushbir" {{ $branch->branch_area === "Fareej Mushbir" ? "selected" : "" }} >Fareej Mushbir</option>
                        <option value="Awadhiya" {{ $branch->branch_area === "Awadhiya" ? "selected" : "" }} >Awadhiya</option>
                        <option value="Adliya" {{ $branch->branch_area === "Adliya" ? "selected" : "" }} >Adliya</option>
                        <option value="Bu Ashira" {{ $branch->branch_area === "Bu Ashira" ? "selected" : "" }} >Bu Ashira</option>
                        <option value="Bu Ghazal" {{ $branch->branch_area === "Bu Ghazal" ? "selected" : "" }} >Bu Ghazal</option>
                        <option value="Diplomatic Area" {{ $branch->branch_area === "Diplomatic Area" ? "selected" : "" }} >Diplomatic Area</option>
                        <option value="Ghuraifa" {{ $branch->branch_area === "Ghuraifa" ? "selected" : "" }} >Ghuraifa</option>
                        <option value="Gudaibiya" {{ $branch->branch_area === "Gudaibiya" ? "selected" : "" }} >Gudaibiya</option>
                        <option value="Gufool" {{ $branch->branch_area === "Gufool" ? "selected" : "" }} >Gufool</option>
                        <option value="Hoora" {{ $branch->branch_area === "Hoora" ? "selected" : "" }} >Hoora</option>
                        <option value="Juffair" {{ $branch->branch_area === "Juffair" ? "selected" : "" }} >Juffair</option>
                        <option value="Mahooz" {{ $branch->branch_area === "Mahooz" ? "selected" : "" }} >Mahooz</option>
                        <option value="Noaim" {{ $branch->branch_area === "Noaim" ? "selected" : "" }} >Noaim</option>
                        <option value="Ras Rumman" {{ $branch->branch_area === "Ras Rumman" ? "selected" : "" }} >Ras Rumman</option>
                        <option value="Seef" {{ $branch->branch_area === "Seef" ? "selected" : "" }} >Seef</option>
                        <option value="Seqaya" {{ $branch->branch_area === "Seqaya" ? "selected" : "" }} >Seqaya</option>
                        <option value="Sulmaniya" {{ $branch->branch_area === "Sulmaniya" ? "selected" : "" }} >Sulmaniya</option>
                        <option value="Umm Al Hassam" {{ $branch->branch_area === "Umm Al Hassam" ? "selected" : "" }} >Umm Al Hassam</option>
                        <option value="Zinj" {{ $branch->branch_area === "Zinj" ? "selected" : "" }} >Zinj</option>
                        <option value="Riffa" {{ $branch->branch_area === "Riffa" ? "selected" : "" }} >Riffa</option>
                        <option value="East Riffa" {{ $branch->branch_area === "East Riffa" ? "selected" : "" }} >East Riffa</option>
                        <option value="West Riffa" {{ $branch->branch_area === "West Riffa" ? "selected" : "" }} >West Riffa</option>
                        <option value="Muharraq" {{ $branch->branch_area === "Muharraq" ? "selected" : "" }} >Muharraq</option>
                        <option value="Al Dair" {{ $branch->branch_area === "Al Dair" ? "selected" : "" }} >Al Dair</option>
                        <option value="Arad" {{ $branch->branch_area === "Arad" ? "selected" : "" }} >Arad</option>
                        <option value="Busaiteen" {{ $branch->branch_area === "Busaiteen" ? "selected" : "" }} >Busaiteen</option>
                        <option value="Hidd" {{ $branch->branch_area === "Hidd" ? "selected" : "" }} >Hidd</option>
                        <option value="East Hidd City" {{ $branch->branch_area === "East Hidd City" ? "selected" : "" }} >East Hidd City</option>
                        <option value="Galali" {{ $branch->branch_area === "Galali" ? "selected" : "" }} >Galali</option>
                        <option value="Halat Bu Maher" {{ $branch->branch_area === "Halat Bu Maher" ? "selected" : "" }} >Halat Bu Maher</option>
                        <option value="Halat Nuaim" {{ $branch->branch_area === "Halat Nuaim" ? "selected" : "" }} >Halat Nuaim</option>
                        <option value="Halat Seltah" {{ $branch->branch_area === "Halat Seltah" ? "selected" : "" }}  >Halat Seltah</option>
                        <option value="Samaheej" {{ $branch->branch_area === "Samaheej" ? "selected" : "" }} >Samaheej</option>
                        <option value="Hamad Town" {{ $branch->branch_area === "Hamad Town" ? "selected" : "" }}  >Hamad Town</option>
                        <option value="A’Ali" {{ $branch->branch_area === "A’Ali" ? "selected" : "" }} >A’Ali</option>
                        <option value="Budaiya" {{ $branch->branch_area === "Budaiya" ? "selected" : "" }} >Budaiya</option>
                        <option value="Jasra" {{ $branch->branch_area === "Jasra" ? "selected" : "" }} >Jasra</option>
                        <option value="Boori" {{ $branch->branch_area === "Boori" ? "selected" : "" }} >Boori</option>
                        <option value="Hamala" {{ $branch->branch_area === "Hamala" ? "selected" : "" }} >Hamala</option>
                        <option value="Dumistan" {{ $branch->branch_area === "Dumistan" ? "selected" : "" }} >Dumistan</option>
                        <option value="Karzakan" {{ $branch->branch_area === "Karzakan" ? "selected" : "" }} >Karzakan</option>
                        <option value="Malikiya" {{ $branch->branch_area === "Malikiya" ? "selected" : "" }} >Malikiya</option>
                        <option value="Sadad" {{ $branch->branch_area === "Sadad" ? "selected" : "" }} >Sadad</option>
                        <option value="Shahrakan" {{ $branch->branch_area === "Shahrakan" ? "selected" : "" }} >Shahrakan</option>
                        <option value="Dar Kulaib" {{ $branch->branch_area === "Dar Kulaib" ? "selected" : "" }} >Dar Kulaib</option>
                        <option value="Zallaq" {{ $branch->branch_area === "Zallaq" ? "selected" : "" }} >Zallaq</option>
                        <option value="Umm an Nasan" {{ $branch->branch_area === "Umm an Nasan" ? "selected" : "" }} >Umm an Nasan</option>
                        <option value="Umm as Sabaan" {{ $branch->branch_area === "Umm as Sabaan" ? "selected" : "" }} >Umm as Sabaan</option>
                        <option value="Jidda Island" {{ $branch->branch_area === "Jidda Island" ? "selected" : "" }} >Jidda Island</option>
                        <option value="Saar" {{ $branch->branch_area === "Saar" ? "selected" : "" }} >Saar</option>
                        <option value="Northern City" {{ $branch->branch_area === "Northern City" ? "selected" : "" }} >Northern City</option>
                        <option value="Al Markh" {{ $branch->branch_area === "Al Markh" ? "selected" : "" }} >Al Markh</option>
                        <option value="Janabiya" {{ $branch->branch_area === "Janabiya" ? "selected" : "" }} >Janabiya</option>
                        <option value="Diraz" {{ $branch->branch_area === "Diraz" ? "selected" : "" }} >Diraz</option>
                        <option value="Bani Jamra" {{ $branch->branch_area === "Bani Jamra" ? "selected" : "" }} >Bani Jamra</option>
                        <option value="Qurayya" {{ $branch->branch_area === "Qurayya" ? "selected" : "" }} >Qurayya</option>
                        <option value="Abu Saiba" {{ $branch->branch_area === "Abu Saiba" ? "selected" : "" }} >Abu Saiba</option>
                        <option value="Shakhura" {{ $branch->branch_area === "Shakhura" ? "selected" : "" }} >Shakhura</option>
                        <option value="Jid Al-Haj" {{ $branch->branch_area === "Jid Al-Haj" ? "selected" : "" }} >Jid Al-Haj</option>
                        <option value="Jannusan" {{ $branch->branch_area === "Jannusan" ? "selected" : "" }} >Jannusan</option>
                        <option value="Muqaba" {{ $branch->branch_area === "Muqaba" ? "selected" : "" }} >Muqaba</option>
                        <option value="Barbar" {{ $branch->branch_area === "Barbar" ? "selected" : "" }} >Barbar</option>
                        <option value="Khamis" {{ $branch->branch_area === "Khamis" ? "selected" : "" }} >Khamis</option>
                        <option value="Jidhafs" {{ $branch->branch_area === "Jidhafs" ? "selected" : "" }} >Jidhafs</option>
                        <option value="Al Musalla" {{ $branch->branch_area === "Al Musalla" ? "selected" : "" }} >Al Musalla</option>
                        <option value="Tashan" {{ $branch->branch_area === "Tashan" ? "selected" : "" }} >Tashan</option>
                        <option value="Abu Baham" {{ $branch->branch_area === "Abu Baham" ? "selected" : "" }} >Abu Baham</option>
                        <option value="North Sehla" {{ $branch->branch_area === "North Sehla" ? "selected" : "" }} >North Sehla</option>
                        <option value="South Sehla" {{ $branch->branch_area === "South Sehla" ? "selected" : "" }} >South Sehla</option>
                        <option value="Buquwa" {{ $branch->branch_area === "Buquwa" ? "selected" : "" }} >Buquwa</option>
                        <option value="Al Qala" {{ $branch->branch_area === "Al Qala" ? "selected" : "" }} >Al Qala</option>
                        <option value="Hillat Abdul Saleh" {{ $branch->branch_area === "Hillat Abdul Saleh" ? "selected" : "" }} >Hillat Abdul Saleh</option>
                        <option value="Meqsha" {{ $branch->branch_area === "Meqsha" ? "selected" : "" }} >Meqsha</option>
                        <option value="Al Qadam" {{ $branch->branch_area === "Al Qadam" ? "selected" : "" }} >Al Qadam</option>
                        <option value="Al Hajar" {{ $branch->branch_area === "Al Hajar" ? "selected" : "" }} >Al Hajar</option>
                        <option value="Karrana" {{ $branch->branch_area === "Karrana" ? "selected" : "" }} >Karrana</option>
                        <option value="JidAli" {{ $branch->branch_area === "JidAli" ? "selected" : "" }} >JidAli</option>
                        <option value="Sitra" {{ $branch->branch_area === "Sitra" ? "selected" : "" }} >Sitra</option>
                        <option value="Other" {{ $branch->branch_area === "Other" ? "selected" : "" }} >Other</option>
                      </select>
                      {!! $errors->first('branch_area', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control {{ $errors->has('branch_address') ? 'is-invalid' : ''}}" name="branch_address" value="{{$branch->branch_address}}">
                      {!! $errors->first('branch_address', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Telephone</label>
                      <input type="text" class="form-control {{ $errors->has('branch_tel') ? 'is-invalid' : ''}}" name="branch_tel" value="{{$branch->branch_tel}}">
                      {!! $errors->first('branch_tel', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Mobile</label>
                      <input type="text" class="form-control {{ $errors->has('branch_mob') ? 'is-invalid' : ''}}" name="branch_mob" value="{{$branch->branch_mob}}">
                      {!! $errors->first('branch_mob', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Location (Google Map Link)</label>
                      <input type="text" class="form-control {{ $errors->has('branch_location') ? 'is-invalid' : ''}}" name="branch_location" value="{{$branch->branch_location}}">
                      {!! $errors->first('branch_location', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Branch Rent (Per Month)</label>
                      <input type="text" class="form-control {{ $errors->has('branch_rent') ? 'is-invalid' : ''}}" name="branch_rent" value="{{$branch->branch_rent}}">
                      {!! $errors->first('branch_rent', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>EWA Account Number</label>
                      <input type="text" class="form-control {{ $errors->has('branch_ewa_no') ? 'is-invalid' : ''}}" name="branch_ewa_no" value="{{$branch->branch_ewa_no}}">
                      {!! $errors->first('branch_ewa_no', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Municipality (Per Month)</label>
                      <input type="text" class="form-control {{ $errors->has('branch_municipality') ? 'is-invalid' : ''}}" name="branch_municipality" value="{{$branch->branch_municipality}}">
                      {!! $errors->first('branch_municipality', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>VAT Number</label>
                      <input type="text" class="form-control {{ $errors->has('branch_vat') ? 'is-invalid' : ''}}" name="branch_vat" value="{{$branch->branch_vat}}">
                      {!! $errors->first('branch_vat', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Opening Date</label>
                      <input type="text" class="form-control {{ $errors->has('branch_opening') ? 'is-invalid' : ''}}" name="branch_opening" value="{{$branch->branch_opening}}">
                      {!! $errors->first('branch_opening', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Closing Date</label>
                      <input type="text" class="form-control {{ $errors->has('branch_closing') ? 'is-invalid' : ''}}" name="branch_closing" value="{{$branch->branch_closing}}">
                      {!! $errors->first('branch_closing', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>C.R Number</label>
                      <input type="text" class="form-control {{ $errors->has('branch_cr_no') ? 'is-invalid' : ''}}" name="branch_cr_no" value="{{$branch->branch_cr_no}}">
                      {!! $errors->first('branch_cr_no', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>C.R Expriy Date</label>
                      <input type="text" class="form-control {{ $errors->has('branch_cr_exp') ? 'is-invalid' : ''}}" name="branch_cr_exp" value="{{$branch->branch_cr_exp}}">
                      {!! $errors->first('branch_cr_exp', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Branch Target per month</label>
                      <input type="text" class="form-control {{ $errors->has('branch_target') ? 'is-invalid' : ''}}" name="branch_target" value="{{$branch->branch_target}}">
                      {!! $errors->first('branch_target', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>





                  <div class="col-12">
                    <button type="submit" class="btn btn-success mr-1 mb-1">Update</button>
                    <a href="{{route('branches.index')}}" class="btn btn-info mr-1 mb-1">Back to List</a>
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
<script>
  $("#area").select2().val("{{$branch->branch_area}}").trigger("change");
</script>
@endsection