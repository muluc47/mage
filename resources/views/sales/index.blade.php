@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Süreç Başlangıcı')

{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
@endsection

@section('content')
<section id="description" class="card">
    <div class="card-header">
      <h4 class="card-title">Süreç Başlangıcı</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <a href="/sale-operation/create" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-plus"></i>&nbsp; Yeni Kayıt</a>

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
                  @foreach($process as $item)
                    <tr>
                        <td class="inline-ref"><a href="/sale-operation/edit/{{ $item->id }}" class="btn btn-icon btn-warning mr-1 mb-1"><i class="bx bx-edit"></i></a>
                          <a href="/sale-operation/delete/{{ $item->id }}" class="btn btn-icon btn-danger mr-1 mb-1"><i class="bx bx-minus"></i></a>
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{{ ($item->type == 'Lokasyon Seçin' ? '' : $item->type) }}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->visit_date }}</td>
                        <td>{{ $item->owner }}</td>
                        <td>{{ ($item->type == 'Anlaşma Tipi' ? '' : $item->type) }}</td>
                        <td>{{ $item->time }}</td>
                        <td>{{ ($item->lpg == 'Lpg Olacak mı?' ? '' : $item->lpg) }}</td>
                    </tr>
                    @endforeach
                    
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