var latitude, longitude;

navigator.geolocation.getCurrentPosition(function(position)
{
     latitude = position.coords.latitude;
     longitude = position.coords.longitude;
});




google.maps.event.addDomListener(window, 'load', function() {


    var map = new google.maps.Map(document.getElementById('map-canvas'), {

        center: new google.maps.LatLng(latitude, longitude),

        zoom: 5,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });



    var panelDiv = document.getElementById('panel');

    var data = new MedicareDataSource;

    var view = new storeLocator.View(map, data, {
        geolocation: true,
        features: data.getFeatures()
    });

    new storeLocator.Panel(panelDiv, {
        view: view
    });
});


