
@extends('layouts/contentLayoutMaster')

@section('title', 'New Branch')
@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
@endsection
@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">New Branch</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" action="{{route('branches.store')}}" method="POST">
                     @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Branch</label>
                                        <input type="text"  class="form-control {{ $errors->has('branch_name') ? 'is-invalid' : ''}}"  name="branch_name">
                                        {!! $errors->first('branch_name', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Area</label>
                                            <select class="select2 form-control {{ $errors->has('branch_area') ? 'is-invalid' : ''}} select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="branch_area">
                                              <option value="">Select Area</option>
                                              <option value="A’Ali">A’Ali</option>
                                              <option value="Abu Al ‘Ayash">Abu Al ‘Ayash</option>
                                              <option value="Abu Bham">Abu Bham</option>
                                              <option value="Abu Sayba">Abu Sayba</option>
                                              <option value="Adhari">Adhari</option>
                                              <option value="Adliya">Adliya</option>
                                              <option value="Al Akr Al Gharbi">Al Akr Al Gharbi</option>
                                              <option value="Al Akr Al Sharqi">Al Akr Al Sharqi</option>
                                              <option value="Al Burhama">Al Burhama</option>
                                              <option value="AL DAIR">AL DAIR</option>
                                              <option value="Al Ekr">Al Ekr</option>
                                              <option value="Al Hajiyat">Al Hajiyat</option>
                                              <option value="Al Hala">Al Hala</option>
                                              <option value="Al Hamriya">Al Hamriya</option>
                                              <option value="Al Kharijiyah">Al Kharijiyah</option>
                                              <option value="Al Ma’ameer">Al Ma’ameer</option>
                                              <option value="Al Nasfa">Al Nasfa</option>
                                              <option value="Al Nuwaidrat">Al Nuwaidrat</option>
                                              <option value="Al Qaryah">Al Qaryah</option>
                                              <option value="Al Shamali">Al Shamali</option>
                                              <option value="Al Amur">Al Amur</option>
                                              <option value="Albarhama">Albarhama</option>
                                              <option value="Al Daih">Al Daih</option>
                                              <option value="Al Diraz">Al Diraz</option>
                                              <option value="Al Dur">Al Dur</option>
                                              <option value="Al Ghaynah">Al Ghaynah</option>
                                              <option value="Al Hajar">Al Hajar</option>
                                              <option value="Al Hamalah">Al Hamalah</option>
                                              <option value="Al Ja’sirah">Al Ja’sirah</option>
                                              <option value="Al Janabiyah">Al Janabiyah</option>
                                              <option value="Al Jasrah">Al Jasrah</option>
                                              <option value="Al Mamtalah">Al Mamtalah</option>
                                              <option value="Al Maqsha">Al Maqsha</option>
                                              <option value="Al Markh">Al Markh</option>
                                              <option value="Al Mazrowiah">Al Mazrowiah</option>
                                              <option value="Al Musalla">Al Musalla</option>
                                              <option value="Al Qadam">Al Qadam</option>
                                              <option value="Al Qal’ah">Al Qal’ah</option>
                                              <option value="Al Qarah">Al Qarah</option>
                                              <option value="Al Qurayn">Al Qurayn</option>
                                              <option value="Al Qurayyah">Al Qurayyah</option>
                                              <option value="Al Riffah">Al Riffah</option>
                                              <option value="Al Rumamin">Al Rumamin</option>
                                              <option value="Al Rumaythah">Al Rumaythah</option>
                                              <option value="Al Safriyah">Al Safriyah</option>
                                              <option value="Al Sakhir">Al Sakhir</option>
                                              <option value="Al Seef">Al Seef</option>
                                              <option value="Al Shabak">Al Shabak</option>
                                              <option value="Amwaj">Amwaj</option>
                                              <option value="Arad">Arad</option>
                                              <option value="Askar">Askar</option>
                                              <option value="Awali">Awali</option>
                                              <option value="Bandar Al Seef">Bandar Al Seef</option>
                                              <option value="Bani Jamra">Bani Jamra</option>
                                              <option value="Bar Bar">Bar Bar</option>
                                              <option value="Bilad Al Qadeem">Bilad Al Qadeem</option>
                                              <option value="Bu Kuwarah">Bu Kuwarah</option>
                                              <option value="Bu Quwah">Bu Quwah</option>
                                              <option value="Budaiya">Budaiya</option>
                                              <option value="Buhair">Buhair</option>
                                              <option value="Buri">Buri</option>
                                              <option value="Busaiteen">Busaiteen</option>
                                              <option value="Daih">Daih</option>
                                              <option value="Dair">Dair</option>
                                              <option value="Damistan">Damistan</option>
                                              <option value="Dar Kulaib">Dar Kulaib</option>
                                              <option value="Demistan">Demistan</option>
                                              <option value="Diraz">Diraz</option>
                                              <option value="Durrat Al Bahrain">Durrat Al Bahrain</option>
                                              <option value="Galali">Galali</option>
                                              <option value="Hafirah">Hafirah</option>
                                              <option value="Hala">Hala</option>
                                              <option value="Halat Al Neaim">Halat Al Neaim</option>
                                              <option value="Halat Al Saletah">Halat Al Saletah</option>
                                              <option value="Hamad Town">Hamad Town</option>
                                              <option value="Hawrat A Ali">Hawrat A Ali</option>
                                              <option value="Hawrat Ingah">Hawrat Ingah</option>
                                              <option value="Hawrat Sanad">Hawrat Sanad</option>
                                              <option value="Hidd">Hidd</option>
                                              <option value="Hillat Abdulsaleh">Hillat Abdulsaleh</option>
                                              <option value="Hoora">Hoora</option>
                                              <option value="Hunainiyah">Hunainiyah</option>
                                              <option value="Industrial Area">Industrial Area</option>
                                              <option value="Isa Town">Isa Town</option>
                                              <option value="Janabiya">Janabiya</option>
                                              <option value="Jannusan">Jannusan</option>
                                              <option value="Jary Al Shaikh">Jary Al Shaikh</option>
                                              <option value="Jau">Jau</option>
                                              <option value="Jeblat Hibshi">Jeblat Hibshi</option>
                                              <option value="Jerdab">Jerdab</option>
                                              <option value="Jid Al Haj">Jid Al Haj</option>
                                              <option value="Jid Hafs">Jid Hafs</option>
                                              <option value="Jidd Ali">Jidd Ali</option>
                                              <option value="Jiddah">Jiddah</option>
                                              <option value="Jidhafs">Jidhafs</option>
                                              <option value="juffair">juffair</option>
                                              <option value="Juzur Al Dar">Juzur Al Dar</option>
                                              <option value="Karbabad">Karbabad</option>
                                              <option value="Karranah">Karranah</option>
                                              <option value="Karzakkan">Karzakkan</option>
                                              <option value="Kawara">Kawara</option>
                                              <option value="Khamis">Khamis</option>
                                              <option value="Maameer">Maameer</option>
                                              <option value="Mahazzah">Mahazzah</option>
                                              <option value="Mahooz">Mahooz</option>
                                              <option value="Malkiya">Malkiya</option>
                                              <option value="Manama Center">Manama Center</option>
                                              <option value="Manama Al Adliyah">Manama Al Adliyah</option>
                                              <option value="Manama Al Corniche">Manama Al Corniche</option>
                                              <option value="Manama Al Fateh">Manama Al Fateh</option>
                                              <option value="Manama Al Ghurayfah">Manama Al Ghurayfah</option>
                                              <option value="Manama Al Guful">Manama Al Guful</option>
                                              <option value="Manama Al Hoora">Manama Al Hoora</option>
                                              <option value="Manama Al Juffair">Manama Al Juffair</option>
                                              <option value="Manama Al Mahuz">Manama Al Mahuz</option>
                                              <option value="Manama Al Naim">Manama Al Naim</option>
                                              <option value="Manama Al Qudaibiya">Manama Al Qudaibiya</option>
                                              <option value="Manama Al Salmaniya">Manama Al Salmaniya</option>
                                              <option value="Manama Al Suqayyah">Manama Al Suqayyah</option>
                                              <option value="Manama Al Suwayfiyah">Manama Al Suwayfiyah</option>
                                              <option value="Manama Buashirah">Manama Buashirah</option>
                                              <option value="Manama Bughazal">Manama Bughazal</option>
                                              <option value="Manama Dipl. Area">Manama Dipl. Area</option>
                                              <option value="Manama Mina Salman Industrial Area">Manama Mina Salman Industrial Area</option>
                                              <option value="Manama Sea Front">Manama Sea Front</option>
                                              <option value="Manama Umm Al Hassam">Manama Umm Al Hassam</option>
                                              <option value="Maqabah">Maqabah</option>
                                              <option value="Mohammadiyah">Mohammadiyah</option>
                                              <option value="Muharraq">Muharraq</option>
                                              <option value="Murqoban">Murqoban</option>
                                              <option value="Muzarra’">Muzarra’</option>
                                              <option value="Nabih Saleh">Nabih Saleh</option>
                                              <option value="Noaim">Noaim</option>
                                              <option value="North Sehla">North Sehla</option>
                                              <option value="Nuwaidrat">Nuwaidrat</option>
                                              <option value="Qalali">Qalali</option>
                                              <option value="Ras Abu Jarjur">Ras Abu Jarjur</option>
                                              <option value="Ras Hayyan">Ras Hayyan</option>
                                              <option value="Ras Ruman">Ras Ruman</option>
                                              <option value="Ras Zuwayed">Ras Zuwayed</option>
                                              <option value="Riffa – Al Rowdha">Riffa – Al Rowdha</option>
                                              <option value="Riffa – Mo’askar">Riffa – Mo’askar</option>
                                              <option value="Riffa   Swayfra">Riffa   Swayfra</option>
                                              <option value="Riffa – Wadi Al Sail">Riffa – Wadi Al Sail</option>
                                              <option value="Riffa Al Gharbi">Riffa Al Gharbi</option>
                                              <option value="Riffa Al Shargi">Riffa Al Shargi</option>
                                              <option value="Riffa Al Hunayniyah">Riffa Al Hunayniyah</option>
                                              <option value="Rubud Al Gharbiyah">Rubud Al Gharbiyah</option>
                                              <option value="Rubud al Sharqiyah">Rubud al Sharqiyah</option>
                                              <option value="Sadad">Sadad</option>
                                              <option value="Safreh">Safreh</option>
                                              <option value="Salihiya">Salihiya</option>
                                              <option value="Salmabad">Salmabad</option>
                                              <option value="Samaheej">Samaheej</option>
                                              <option value="Sanabis">Sanabis</option>
                                              <option value="Sanad">Sanad</option>
                                              <option value="Sar">Sar</option>
                                              <option value="Seef">Seef</option>
                                              <option value="Shahrakkan">Shahrakkan</option>
                                              <option value="Shakhurah">Shakhurah</option>
                                              <option value="Sitra">Sitra</option>
                                              <option value="South Sehla">South Sehla</option>
                                              <option value="Sufala">Sufala</option>
                                              <option value="Sufala">Sufala</option>
                                              <option value="Suqayah">Suqayah</option>
                                              <option value="Suwad Al Janubiyah">Suwad Al Janubiyah</option>
                                              <option value="Suwad Al Shamaliyah">Suwad Al Shamaliyah</option>
                                              <option value="Tarrafi">Tarrafi</option>
                                              <option value="Tashan">Tashan</option>
                                              <option value="Tubli">Tubli</option>
                                              <option value="Um Al Baidh">Um Al Baidh</option>
                                              <option value="Um Alhasam">Um Alhasam</option>
                                              <option value="Umm Al Na’san">Umm Al Na’san</option>
                                              <option value="Umm Jidr">Umm Jidr</option>
                                              <option value="Umm Jidr Al Summan">Umm Jidr Al Summan</option>
                                              <option value="Ummhazwarah">Ummhazwarah</option>
                                              <option value="Wadi Ali">Wadi Ali</option>
                                              <option value="Wadiyan">Wadiyan</option>
                                              <option value="Zallaq">Zallaq</option>
                                              <option value="Zayed Town">Zayed Town</option>
                                              <option value="Zinj"></option>
                                                      </select>
                                                      {!! $errors->first('branch_area', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control {{ $errors->has('branch_address') ? 'is-invalid' : ''}}" name="branch_address">
                                        {!! $errors->first('branch_address', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control {{ $errors->has('branch_tel') ? 'is-invalid' : ''}}" name="branch_tel">
                                        {!! $errors->first('branch_tel', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control {{ $errors->has('branch_mob') ? 'is-invalid' : ''}}" name="branch_mob" >
                                        {!! $errors->first('branch_mob', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Location (Google Map Link)</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_location') ? 'is-invalid' : ''}}" name="branch_location" >
                                            {!! $errors->first('branch_location', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label>Branch Rent (Per Month)</label>
                                        <input type="text" class="form-control {{ $errors->has('branch_rent') ? 'is-invalid' : ''}}" name="branch_rent" >
                                        {!! $errors->first('branch_rent', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>EWA Account Number</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_ewa_no') ? 'is-invalid' : ''}}" name="branch_ewa_no" >
                                            {!! $errors->first('branch_ewa_no', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                   <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Municipality (Per Month)</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_municipality') ? 'is-invalid' : ''}}" name="branch_municipality" >
                                            {!! $errors->first('branch_municipality', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>VAT Number</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_vat') ? 'is-invalid' : ''}}" name="branch_vat" >
                                            {!! $errors->first('branch_vat', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                   <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Opening Date</label>
                                            <input type="date" class="form-control {{ $errors->has('branch_opening') ? 'is-invalid' : ''}}" name="branch_opening" >
                                            {!! $errors->first('branch_opening', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Closing Date</label>
                                            <input type="date" class="form-control {{ $errors->has('branch_closing') ? 'is-invalid' : ''}}" name="branch_closing" >
                                            {!! $errors->first('branch_closing', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>C.R Number</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_cr_no') ? 'is-invalid' : ''}}" name="branch_cr_no" >
                                            {!! $errors->first('branch_cr_no', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>
                                    <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>C.R Expriy Date</label>
                                            <input type="date" class="form-control {{ $errors->has('branch_cr_exp') ? 'is-invalid' : ''}}" name="branch_cr_exp" >
                                            {!! $errors->first('branch_cr_exp', '<div class="invalid-feedback">:message</div>') !!}

                                        </div>
                                  </div>
                                   <div class="col-md-6 col-12">
                                     <div class="form-group">
                                            <label>Branch Target per month</label>
                                            <input type="text" class="form-control {{ $errors->has('branch_target') ? 'is-invalid' : ''}}" name="branch_target" >
                                            {!! $errors->first('branch_target', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                  </div>





                <div class="col-12">
                                     <button type="submit" class="btn btn-success mr-1 mb-1">Save</button>
                                      <button type="reset" class="btn btn-warning mr-1 mb-1">Clear Entry</button>
                                    <a href="{{route('branches.index')}}"  class="btn btn-info mr-1 mb-1">Back to List</a>
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
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/pickers/dateTime/pick-a-datetime.js')) }}"></script>
@endsection
