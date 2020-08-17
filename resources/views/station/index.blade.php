@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','İstasyonlar')

{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
@endsection

@section('content')
<section id="description" class="card">
    <div class="card-header">
      <h4 class="card-title">İstasyonlar</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <a href="/istasyonlar/create" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-plus"></i>&nbsp; Yeni Kayıt</a>

          <div class="table-responsive">
            <table class="table zero-configuration">
                <thead>
                    <tr>
                      <th>İşlem</th>
                        <th>İstasyon Adı</th>
                        <th>Adres</th>
                        <th>Latiude</th>
                        <th>Longitude</th>


                        
                    </tr>
                </thead>
                <tbody>
                  @foreach($process as $item)
                    <tr>
                        <td class="inline-ref"><a href="/istasyonlar/edit/{{ $item->id }}" class="btn btn-icon btn-warning mr-1 mb-1"><i class="bx bx-edit"></i></a>
                          <a href="/istasyonlar/delete/{{ $item->id }}" class="btn btn-icon btn-danger mr-1 mb-1"><i class="bx bx-minus"></i></a>
                        </td>
                        <td>{{ $item->name }}</td>
                        
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->latitude }}</td>
                        <td>{{ $item->longitude }}</td>


                    </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                      <th>İşlem</th>
                        <th>İstasyon Adı</th>
                        <th>Adres</th>
                        <th>Latiude</th>
                        <th>Longitude</th>
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