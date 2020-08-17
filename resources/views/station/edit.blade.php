@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','İstasyonlar')

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
          <a href="/istasyonlar" id="addRow" class="btn btn-primary mb-2"><i class="bx bx-minus"></i>&nbsp; Vazgeç</a>

            <form class="form" method="post" action="/istasyonlar/store">
                @csrf
                <div class="form-body">
                  <div class="row">
                    
                    <div class="col-md-6 col-12">
                      <div class="form-label-group">
                        <input type="text" id="city-column" class="form-control" placeholder="İstasyon Adı" name="name" value="{{ $item->name }}">
                        <label for="city-column">İstasyon Adı</label>
                      </div>
                      <div class="form-label-group">
                        <input type="text" id="mapaddress" class="form-control" name="address" placeholder="Adres" value="{{ $item->address }}">
                        <label for="">Adres</label>
                      </div>
                      <div class="form-label-group">
                        <input type="text" id="latitude" class="form-control" name="latitude" placeholder="Latitude" value="{{ $item->latitude }}">
                        <label for="">Latitude</label>
                      </div>

                      <div class="form-label-group">
                        <input type="text" id="longitude" class="form-control" name="longitude" placeholder="Longitude" value="{{ $item->longitude }}">
                        <label for="">Longitude</label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div id="map-canvas" style="height: 200px; width:400"></div>
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
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete&key=AIzaSyCWLJZrfvk7s8Fc5msD7HEecGDbg0ERr0k"
         async defer></script>
         <!-- google places -->

    <script>

      function initAutocomplete() {
        
        var markers = [];

        var ex_latitude = $('#latitude').val();

        var ex_longitude = $('#longitude').val();

          if (ex_latitude != '' && ex_longitude != ''){

            var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: {lat: parseFloat(ex_latitude), lng: parseFloat(ex_longitude)},
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

         
             var marker = new google.maps.Marker(

                {

                    map: map,

                    draggable:true,
                    icon: "https://mage.theflyingmunch.com/marker.png",

                    animation: google.maps.Animation.DROP,

                    position: new google.maps.LatLng(ex_latitude, ex_longitude)

                });



            markers.push(marker);

            google.maps.event.addListener(marker, 'dragend', function()

            {

                var marker_positions = marker.getPosition();

                $('#latitude').val(marker_positions.lat());

                $('#longitude').val(marker_positions.lng());



            });


          }else{

            var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

          }

        

        // Create the search box and link it to the UI element.
        var input = document.getElementById('mapaddress');
        var searchBox = new google.maps.places.SearchBox(input);
       // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
          
        });

        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
          if (places.length == 0) {
            return;
          }

         
map.setZoom(16);

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);


          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            var marker = new google.maps.Marker({
              map: map,
              icon: "https://mage.theflyingmunch.com/marker.png",
              title: place.name,
              position: place.geometry.location,
              draggable: true,
              animation: google.maps.Animation.DROP,
            });
            // Create a marker for each place.
            markers.push(marker);

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }

          google.maps.event.addListener(marker, 'dragend', function()

            {

                var marker_positions = marker.getPosition();

                $('#latitude').val(marker_positions.lat());

                $('#longitude').val(marker_positions.lng());



            });



      $('#latitude').val(place.geometry.location.lat());
      $('#longitude').val(place.geometry.location.lng());
    

          });



          map.fitBounds(bounds);
          map.setZoom(16);
       
        });


    

      }


    </script>
@endsection