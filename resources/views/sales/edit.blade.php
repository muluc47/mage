@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Süreç Başlangıcı')

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
          <a href="/sale-operation" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-minus"></i>&nbsp; Vazgeç</a>

            <form class="form" method="post" action="/sale-operation/update/{{ $item->id }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="first-name-column" class="form-control pickadate picker__input" placeholder="Ziyaret Tarihi" name="visit_date" value="{{ $item->visit_date }}">
                        <label for="first-name-column">Ziyaret Tarihi</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <select class="form-control" id="basicSelect" name="location">
                            <option >Lokasyon Seçin</option>
                            <option>Adana</option>
                            <option>Ankara</option>
                            <option>İstanbul</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="city-column" class="form-control" placeholder="Bayi Unvanı" name="title" value="{{ $item->title }}">
                        <label for="city-column">Bayi Unvanı</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="country-floating" class="form-control" name="code" placeholder="Bayi Kodu" value="{{ $item->code }}">
                        <label for="country-floating">Bayi Kodu</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="company-column" class="form-control" name="owner" placeholder="Malik Unvanı" value="{{ $item->owner }}">
                        <label for="company-column">Malik Unvanı</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <select class="form-control" id="basicSelect" name="type">
                            <option>Anlaşma Tipi</option>
                            <option>NTI</option>
                            <option>Transfer</option>
                            <option>CR</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <input type="text" id="company-column" class="form-control" name="time" placeholder="Anlaşma Süresi" value="{{ $item->time }}">
                          <label for="company-column">Anlaşma Süresi</label>
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <select class="form-control" id="basicSelect" name="lpg">
                              <option>Lpg Olacak mı?</option>
                              <option>Evet</option>
                              <option>Hayır</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <strong>DCF</strong>
                          <input type="file" name="dcf" class="dropify" data-allowed-file-extensions="pdf txt doc docx png jpg" data-default-file="/{{ $item->dcf }}" />
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <strong>Resim</strong>
                          <input type="file" name="image" class="dropify" data-allowed-file-extensions="png jpg jpeg" data-default-file="/{{ $item->image }}" />
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <strong>Satış Verisi</strong>
                          <input type="file" name="document" class="dropify" data-allowed-file-extensions="txt doc docx pdf jpeg jpg png" data-default-file="/{{ $item->document }}" />
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
@section('page-scripts')
<script>
  $('.dropify').dropify({
    messages: {
        'default': 'Dosyanızı buraya sürükleyin ya da tıklayın',
        'replace': 'Değiştirmek için tıklayın',
        'remove':  'Sil',
        'error':   'Hay Aksi bir hata oluştu.'
    }
});
</script>
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