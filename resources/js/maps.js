let map, activeInfoWindow, markers = [];

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 28.626137, lng: 79.821603 },
            zoom: 15,
        });
    }

    window.onload = initMap;