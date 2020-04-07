var autocomplete, map, infoWindow, marker, geocoder;
var componentForm = {street_number: 'short_name', route: 'long_name', locality: 'long_name', administrative_area_level_1: 'long_name', country: 'long_name', postal_code: 'short_name'};
var latInput = document.getElementById('lat');
var lngInput = document.getElementById('lng');
var autocompleteInput = document.getElementById('autocomplete');
var centerMap = {lat: 1.3466371, lng: 103.756537};
function initAutocomplete() {
    geocoder = new google.maps.Geocoder();
    autocomplete = new google.maps.places.Autocomplete(document.getElementById('autocomplete'), {types: ['geocode']});
    autocomplete.setFields(['address_component']);
    map = new google.maps.Map(document.getElementById('map'), {
        center: centerMap, zoom: 10,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]
    });
    mark(centerMap);
    infoWindow = new google.maps.InfoWindow;
    geolocate();
    autocomplete.addListener('place_changed', fillInAddress);
}
function mark(pos) {
    map.setCenter(pos);
    marker = new google.maps.Marker({map: map, draggable: !0, position: pos});
    marker.addListener('dragend', getMoveMarker)
}
function getMoveMarker() {
    geocoder.geocode({latLng: this.getPosition()}, function (result, status) {
        if ('OK' === status) {
            var address = result[0].formatted_address;
            place = result[0];
            addressComponents(place);
            autocompleteInput.value = address;
            infoAddress(address)
        } else {
            console.log('Geocode was not successful for the following reason: ' + status)
        }
    });
}
function infoAddress(address) {
    if (address == "") {
        address = autocompleteInput.value;
        infoWindow.setContent(address)
    } else {
        infoWindow.setContent(address)
    }
    infoWindow.open(map, marker)
}
function fillInAddress() {
    var place = autocomplete.getPlace();
    var address = autocompleteInput.value;
    geocoder.geocode({'address': address}, function (results, status) {
        if (status == 'OK') {
            infoAddress();
            marker.setMap(null);
            mark(results[0].geometry.location)
        } else {
            alert('Geocode was not successful for the following reason: ' + status)
        }
    });
    addressComponents(place)
}
function addressComponents(place) {
    for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = !1
    }
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val
        }
    }
    latInput.value = marker.getPosition().lat();
    lngInput.value = marker.getPosition().lng()
}
function geolocate() {
    marker.setMap(null);
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = {lat: position.coords.latitude, lng: position.coords.longitude};
            mark(geolocation);
            var circle = new google.maps.Circle({center: geolocation, radius: position.coords.accuracy});
            autocomplete.setBounds(circle.getBounds())
        })
    }
}