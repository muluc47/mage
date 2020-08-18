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
            <h4 class="card-title">Yeni Kayıt</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="card-text">
                    <a href="/license-document" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-minus"></i>&nbsp;
                        Vazgeç</a>

                    <form class="form" method="post" action="/license-document/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Akaryakıt bayilik lisansı taahhütname</strong>
                                        <input type="file" name="bayiiTah" class="dropify"
                                               data-allowed-file-extensions="pdf txt doc docx png jpg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>LPG bayilik lisansı taahhütname</strong>
                                        <input type="file" name="lpgTah" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Başvuru Dilekçesi</strong>
                                        <input type="file" name="basDil" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Yetki Belgesi</strong>
                                        <input type="file" name="yeBel" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Oda Sicil Kaydı</strong>
                                        <input type="file" name="osKay" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>İşyeri Açma ve Çalışma Ruhsatı</strong>
                                        <input type="file" name="iacRuh" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Asgari Mesafe Tespit Tutanağı</strong>
                                        <input type="file" name="amtTut" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Bayilik Sözleşmesi</strong>
                                        <input type="file" name="bayiSoz" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Ortaklar ve Hisse Dağılımı Beyanı</strong>
                                        <input type="file" name="odBey" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Adli Sicil Belgesi</strong>
                                        <input type="file" name="adsBel" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Vergi Kimlik Belgesi</strong>
                                        <input type="file" name="verKBel" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Sigorta Poliçesi</strong>
                                        <input type="file" name="sPol" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong> Beyan Dilekçesi</strong>
                                        <input type="file" name="bDil" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong> İstasyon Otomasyon Sistemi Beyanı</strong>
                                        <input type="file" name="iosBey" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong> Adres Teyit Yazısı</strong>
                                        <input type="file" name="atYaz" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong> Köy Pompasına Ait İşyeri Açma ve Çalışma Ruhsatı</strong>
                                        <input type="file" name="kpiaRuh" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong> Taşıma Belgesi, Taşıt Listesi ve Taşıt Kartı</strong>
                                        <input type="file" name="tasBel" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong> Lisans Bedeli Dekontu</strong>
                                        <input type="file" name="lbDek" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong> Kaçakçılık Fiilleri Beyanı</strong>
                                        <input type="file" name="kfBey" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>ÖTV beyanı</strong>
                                        <input type="file" name="otvBey" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Devir ise - Eski lisans sahibinin lisansının sona erdirilmesi için alınan yazı</strong>
                                        <input type="file" name="devLis" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>Devir ise - Eski lisans sahibinin İmza sirküleri	Yüklemeli olacak</strong>
                                        <input type="file" name="devimSür" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>LPG Otogaz Bayilik Sözleşmesi</strong>
                                        <input type="file" name="lgpBaySöz" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>LPG Lisans Bedeli Dekontu</strong>
                                        <input type="file" name="lpgLisBed" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>LPG Sorumlu Müdür Sözleşmesi</strong>
                                        <input type="file" name="lpgSorMüd" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>LPG Dolum Tesisleri ve Otogaz İstasyonları Sorumlu Müdür Belgesi</strong>
                                        <input type="file" name="lpgDolTes" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                        <strong>LPG otogaz istasyonu faaliyete yeni başlayacak </strong>
                                        <input type="file" name="lpgOtİs" class="dropify"
                                               data-allowed-file-extensions="png jpg jpeg"/>
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
                'remove': 'Sil',
                'error': 'Hay Aksi bir hata oluştu.'
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
