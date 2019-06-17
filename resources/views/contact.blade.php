@extends('master')

@section('title')
Contact | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-10 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Contact Us
        </h1>  
    </div>
</div>
<div class="bgi-g1">
    <div class="container mx-auto py-12 flex justify-center">

        <div class="">
            <p class="py-4 px-4 text-2xl text-grey-darkest"><i class="fas fa-phone-volume text-p mr-4"></i> Call us Monday to Saturday <br> <br> 01-8476000</p>
            <div class="px-8 text-grey-darkest">
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Orders: 01 8476000 +1  / orders@ommeats.ie</p>
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Dispatch: 01 8476000 +2</p>
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Accounts: 01 8476000 +3 / madeleine@ommeats.ie</p>
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Shop: 01 8476000 +4</p>
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Sales: 01 8476000 +5 / michael@ommeats.ie</p>
            </div>
        </div>

    </div>
    <div class="container mx-auto flex justify-center">
        <p class="pb-4 px-4 text-2xl text-grey-darkest"><i class="fas fa-map-marker-alt text-p mr-4"></i>
            Unit 13A, Malahide Rd Industrial Park, D17F309
        </p>

    </div>
    {{-- <div class="container mx-auto flex pb-4 justify-center bgi-g1">
        <div class="map w-full h-30r" id="map">

        </div>
    </div> --}}
    
</div>
@endsection

@section('scripts')
@parent
<script> 
    function initMap() {
      
      var clonturk = {
          info: '<strong>O\'Mahony Meats </strong><br>\
          Unit 13A, Malahide Rd Industrial Park, D17F309<br>\
                      <a href="https://goo.gl/maps/HuoGoU1kXoJ8hv7w9" target="_blank">Get Directions</a>',
          lat: 53.397256, 
          long: -6.194748
      };
  
  
      var locations = [
        [clonturk.info, clonturk.lat, clonturk.long, 0],
      ];
  
      var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: new google.maps.LatLng(53.397256, -6.194748),
          mapTypeId: google.maps.MapTypeId.ROADMAP
      });
  
      var infowindow = new google.maps.InfoWindow({});
  
      var marker, i;
  
      for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(locations[i][1], locations[i][2]),
              map: map
          });
  
          google.maps.event.addListener(marker, 'click', (function (marker, i) {
              return function () {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
              }
          })(marker, i));
      }
  }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtbJayjrxT9C_mqWSebyR4DxEIi7cRl3g&callback=initMap"
    async defer></script>
@endsection