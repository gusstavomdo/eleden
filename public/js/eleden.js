$(function () {
  $('[data-toogle="tooltip"]').tooltip()
})

// Initialize and add the map Google
function initMap() {
  // The location of Uluru
  var eleden = {lat: 19.5675648, lng: -98.8264572 };
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: eleden});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: eleden, map: map});
}
