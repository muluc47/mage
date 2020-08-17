@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Bayi İletişim')

{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
@endsection

@section('content')
<section id="description" class="card">
    <div class="card-header">
      <h4 class="card-title">Bayi İletişim</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <a href="/bayi-iletisim/create" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-plus"></i>&nbsp; Yeni Kayıt</a>

          <div class="table-responsive">
            <table class="table zero-configuration">
                <thead>
                    <tr>
                      <th>İşlem</th>
                        <th>Bayi Adı</th>
                        <th>Telefon</th>
                        <th>Fax</th>
                        <th>Email</th>
                        <th>Kep</th>
                        <th>Yetkili</th>
                        <th>Yetkili Tel</th>

                        
                    </tr>
                </thead>
                <tbody>
                  @foreach($process as $item)
                    <tr>
                        <td class="inline-ref"><a href="/bayi-iletisim/edit/{{ $item->id }}" class="btn btn-icon btn-warning mr-1 mb-1"><i class="bx bx-edit"></i></a>
                          <a href="/bayi-iletisim/delete/{{ $item->id }}" class="btn btn-icon btn-danger mr-1 mb-1"><i class="bx bx-minus"></i></a>
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{{ ($item->phone == 'Lokasyon Seçin' ? '' : $item->phone) }}</td>
                        <td>{{ $item->fax }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->kep }}</td>
                        <td>{{ ($item->owner == 'Anlaşma Tipi' ? '' : $item->owner) }}</td>
                        <td>{{ $item->owner_phone }}</td>

                    </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                      <th>Bayi Adı</th>
                        <th>Telefon</th>
                        <th>Fax</th>
                        <th>Email</th>
                        <th>Kep</th>
                        <th>Yetkili</th>
                        <th>Yetkili Tel</th>
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