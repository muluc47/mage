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
            <h4 class="card-title">Bayilik İleri Yarıtım</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="card-text">
                    <a href="/dealership-investment/create" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-plus"></i>&nbsp; Yeni Kayıt</a>

                    <div class="table-responsive">
                        <table class="table zero-configuration">
                            <thead>
                            <tr>
                                <th>İşlem</th>
                                <th>Bayi Ünvanı</th>
                                <th>Lokasyon</th>
                                <th>Bayi Kodu</th>
                                <th>Ziyaret Tarihi</th>
                                <th>Malik Ünvanı</th>
                                <th>Anlaşma Tipi</th>
                                <th>Anlaşma Süresi</th>
                                <th>LPG</th>

                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>İşlem</th>
                                <th>Bayi Ünvanı</th>
                                <th>Lokasyon</th>
                                <th>Bayi Kodu</th>
                                <th>Ziyaret Tarihi</th>
                                <th>Malik Ünvanı</th>
                                <th>Anlaşma Tipi</th>
                                <th>Anlaşma Süresi</th>
                                <th>LPG</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('vendor-scripts')
    <script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection
