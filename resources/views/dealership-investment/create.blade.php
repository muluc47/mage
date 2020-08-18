@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Bayilik İleri Yarıtım')

{{-- vendor styles --}}
@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
@endsection

@section('content')
    <section id="description" class="card">
        <div class="card-header">
            <h4 class="card-title">Yeni Kayıt</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="card-text">
                    <a href="/dealership-investment" id="addRow" class="btn btn-primary mb-2"><i
                            class="bx bx-minus"></i>&nbsp; Vazgeç</a>

                    <form class="form" method="post" action="/dealership-investment/store"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">


                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>YKK Onayı </strong>
                                        <input type="file" name="ykkOnay" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Alınan Teminat</strong>
                                        <input type="file" name="alTem" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Yapılan İstihbarat sürecit</strong>
                                        <input type="file" name="alTem" class="yistih"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <input type="text" id="city-column" class="form-control" placeholder="Başlangıç Teminattı eksik alınma nedeni" name="bTemEksik">
                                        <label for="city-column">Başlangıç Teminattı eksik alınma nedeni</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <input type="text" id="city-column" class="form-control" placeholder="Eksik Teminatın tamamlanması için takip edilmesi gereken tarih" name="etTarih">
                                        <label for="city-column">Eksik Teminatın tamamlanması için takip edilmesi gereken tarih	</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <input type="text" id="city-column" class="form-control" placeholder="LPG Geçiş Tarihi" name="lpgGecTarih">
                                        <label for="city-column">LPG Geçiş Tarihi	</label>
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
@endsection
