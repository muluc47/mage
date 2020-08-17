@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Teminatlar')

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
      <h4 class="card-title">Teminatlar</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <a href="/teminatlar" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-minus"></i>&nbsp; Vazgeç</a>

            <form class="form" method="post" action="/teminatlar/store" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                  <div class="row">
                    
                    
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="letter" class="form-control" placeholder="Teminat Mektubu" name="letter">
                        <label for="letter">Teminat Mektubu</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="is_pay" class="form-control" name="is_pay" placeholder="TP Tarafından Karşılanacak mı?">
                        <label for="is_pay">TP Tarafından Karşılanacak mı?</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="reserved" class="form-control" name="reserved" placeholder="İpotek">
                        <label for="reserved">İpotek</label>
                      </div>
                    </div>
                    

                    <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <input type="text" id="reserve_status" class="form-control" name="reserve_status" placeholder="İpotek derecesi">
                          <label for="reserve_status">İpotek derecesi</label>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <input type="text" id="expertise_value" class="form-control" name="expertise_value" placeholder="Expertiz Değeri">
                          <label for="expertise_value">Expertiz Değeri</label>
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <input type="text" id="contract" class="form-control" name="contract" placeholder="Teminat Çeki">
                          <label for="contract">Teminat Çeki</label>
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <input type="text" id="contract_type" class="form-control" name="contract_type" placeholder="Teminat Senedi">
                          <label for="contract_type">Teminat Senedi</label>
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <input type="text" id="rent_status" class="form-control" name="rent_status" placeholder="Kira Şerhi / İntifa Alınacak mı">
                          <label for="rent_status">Kira Şerhi / İntifa Alınacak mı</label>
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <input type="text" id="rent_time" class="form-control" name="rent_time" placeholder="Kira Şerhi / İntifa Süresi">
                          <label for="rent_time">Kira Şerhi / İntifa Süresi</label>
                        </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <input type="text" id="rent_cost" class="form-control" name="rent_cost" placeholder="Kira Şerhi / İntifa Tutarı">
                          <label for="rent_cost">Kira Şerhi / İntifa Tutarı</label>
                        </div>
                      </div>

                      
                      <div class="col-md-6 col-12">
                        <div class="form-label-group">
                          <strong>Expertiz Raporu</strong>
                          <input type="file" name="expertise" class="dropify" data-allowed-file-extensions="pdf txt doc docx png jpg" />
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