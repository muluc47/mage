@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Bayi İletişim')

{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="/vendors/css/pickers/daterange/daterangepicker.css">
@endsection

@section('content')
<section id="description" class="card">
    <div class="card-header">
      <h4 class="card-title">Düzenle</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <a href="/bayi-iletisim" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-minus"></i>&nbsp; Vazgeç</a>

            <form class="form" method="post" action="/bayi-iletisim/store">
                @csrf
                <div class="form-body">
                  <div class="row">
                    
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="city-column" class="form-control" placeholder="Bayi Adı" name="title" value="{{ $item->title }}">
                        <label for="city-column">Bayi Adı</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="" class="form-control" name="phone" placeholder="Bayi Telefon" value="{{ $item->phone }}">
                        <label for="">Bayi Telefon</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="" class="form-control" name="fax" placeholder="Bayi Fax" value="{{ $item->fax }}">
                        <label for="">Bayi Fax</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="" class="form-control" name="email" placeholder="Bayi Email" value="{{ $item->email }}">
                        <label for="">Bayi Email</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="" class="form-control" name="kep" placeholder="Kep Adres" value="{{ $item->kep }}">
                        <label for="">Kep Adres</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="" class="form-control" name="owner" placeholder="Yetkili Kişi" value="{{ $item->owner }}">
                        <label for="">Yetkili Kişi</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="" class="form-control" name="owner_phone" placeholder="Yetkili Telefon" value="{{ $item->owner_phone }}">
                        <label for="">Yetkili Telefon</label>
                      </div>
                    </div>
                    
 
                    <div class="col-12 d-flex justify-content-end">
                      <button type="submit" class="btn btn-primary mr-1 mb-1">Kaydet</button>
                      
                    </div>
                  </div>
                </div>
              </form>


        </div>
      </div>
    </div>
  </section>

@endsection

@section('vendor-scripts')
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
<script src="/vendors/js/pickers/pickadate/picker.js"></script>
<script src="/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="/vendors/js/pickers/daterange/moment.min.js"></script>
<script src="/vendors/js/pickers/daterange/daterangepicker.js"></script>
<script src="/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
@endsection