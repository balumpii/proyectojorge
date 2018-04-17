function inicializarMapa() {
     var latlong1 = {lat: -34.397, lng: 150.644};
     var latlong2 = {lat: -34.100, lng: 150.643};
     var opciones_de_mapa = {center: {lat: -34.397, lng: 150.644},zoom: 8, mapTypeId: google.maps.MapTypeId.SATELLITE, zoomControl: false};
     var map = new google.maps.Map(document.getElementById('mapa'), opciones_de_mapa);
     
     var icon = {
       url: "../images/chincheta.png",
       scaledSize: new google.maps.Size(50, 50), // scaled size
       origin: new google.maps.Point(0,0), // origin
       anchor: new google.maps.Point(0, 0)// anchor
       };
    
     
     var marker = new google.maps.Marker({position:latlong1, map:map,title:"La Empesa", icon:icon});
     var marker2 = new google.maps.Marker({position:latlong2, map:map,title:"La Empesa", icon:icon});
     
     
    
    var boundbox = new google.maps.LatLngBounds();
     
    boundbox.extend(latlong1);
    boundbox.extend(latlong2 );
   
    var centro = boundbox.getCenter ();
    map.setCenter(centro);
    map.fitBound(boundbox);
    
     
     
     
      }
