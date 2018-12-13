@extends('layouts.template')

@push('estilo')
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
@endpush

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ action('HomeController@index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ action('ColetaController@index') }}"> Coletas</a></li>
                <li class="active">Exibir</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <section class="panel">

        <div>
            <div id="map"></div>

        </div>

    </section>


    @push('scripts')

        <script>

            {{--let coleta = {!! json_encode($coleta) !!};--}}
            {{--let usuarios = {!! json_encode($coleta->Usuario) !!};--}}

            var map;

            function initMap(){

                let coleta = {!! json_encode($coleta) !!};
                let usuarios = {!! json_encode($coleta->Usuario) !!};

                var Maceio = {
                    lat: -9.648139,
                    lng: -35.717239
                };

                var directionsService = new google.maps.DirectionsService;
                var directionsDisplay = new google.maps.DirectionsRenderer;

                var map = new google.maps.Map(document.getElementById('map'), {
                    center: Maceio,
                    zoom: 12,
                    mapTypeId: 'terrain'
                });

               // calculateAndDisplayRoute(directionsService, directionsDisplay);

                var waypts = [];

                for(var i = 0;i < usuarios.length; i++){
                    waypts.push({location: { "lat": usuarios[i]['latitude'], "lng": usuarios[i]['longitude'] }});
                }

                console.log(waypts);

                var origem = usuarios[0]['latitude'];
                var destino = usuarios[usuarios.length]['longitude'];

                console.log(destino);

                directionsService.route({
                    origin: {
                        // lat: -9.646317,
                        // lat: users[0]['latitude'],
                        // lng: -35.712025
                        // lng: users[users.length]['longitude']
                    },
                    destination: {
                        lat: -9.644984,
                        lng: -35.710105
                    },
                    waypoints: waypts,
                    optimizeWaypoints: true,
                    travelMode: 'DRIVING'
                }, function(response, status) {
                    if (status === 'OK') {
                        directionsDisplay.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }

        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRZkFsZNF6jjII-FGR7kR3PRexS0vLwro&callback=initMap"></script>
    @endpush


@endsection