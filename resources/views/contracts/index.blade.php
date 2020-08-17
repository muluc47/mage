@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Teminatlar')

{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
@endsection

@section('content')
<section id="description" class="card">
    <div class="card-header">
      <h4 class="card-title">Teminatlar</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <a href="/teminatlar/create" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-plus"></i>&nbsp; Yeni Kayıt</a>

          <div class="table-responsive">
            <table class="table zero-configuration">
                <thead>
                    <tr>
                      <th>İşlem</th>
                        <th>Teminat Mektubu</th>
                        <th>Tp Karşılama</th>
                        <th>İpotek</th>
                        <th>İpotek Derece</th>
                        <th>Expertiz Değeri</th>
                        <th>Teminat Çeki</th>
                        <th>Teminat Senedi</th>
                        <th>Kira Şerhi</th>
                        <th>İntifa Süresi</th>
                        <th>İntifa Tutarı</th>
                        
                    </tr>
                </thead>
                <tbody>
                  @foreach($process as $item)
                    <tr>
                        <td class="inline-ref"><a href="/teminatlar/edit/{{ $item->id }}" class="btn btn-icon btn-warning mr-1 mb-1"><i class="bx bx-edit"></i></a>
                          <a href="/teminatlar/delete/{{ $item->id }}" class="btn btn-icon btn-danger mr-1 mb-1"><i class="bx bx-minus"></i></a>
                        </td>
                        <td>{{ $item->letter }}</td>
                        <td>{{ ($item->is_pay == 'Lokasyon Seçin' ? '' : $item->is_pay) }}</td>
                        <td>{{ $item->reserved }}</td>
                        <td>{{ $item->reserve_status }}</td>
                        <td>{{ $item->expertise_value }}</td>
                        <td>{{ ($item->contract == 'Anlaşma Tipi' ? '' : $item->contract) }}</td>
                        <td>{{ $item->contract_type }}</td>
                        <td>{{ ($item->rent_status == 'Lpg Olacak mı?' ? '' : $item->rent_status) }}</td>
                        <td>{{ $item->rent_time }}</td>
                        <td>{{ $item->rent_cost }}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                      <th>İşlem</th>
                      <th>Teminat Mektubu</th>
                        <th>Tp Karşılama</th>
                        <th>İpotek</th>
                        <th>İpotek Derece</th>
                        <th>Expertiz Değeri</th>
                        <th>Teminat Çeki</th>
                        <th>Teminat Senedi</th>
                        <th>Kira Şerhi</th>
                        <th>İntifa Süresi</th>
                        <th>İntifa Tutarı</th>
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