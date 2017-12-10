@extends('adminpage.layout.main_layout')

@section('content')
    <section id="main">
        <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="{{asset('admin/js/gmaps.js')}}"></script>
        <div class="inner-block">
            <!--market updates updates-->
            <div class="map-main-page">
                <h2>Maps</h2>
                <div class="map-grid">
                    <div class="map-system">
                        <div class="col-md-6 map-1">
                            <div class="span11">
                                <div id="map3"></div>
                            </div>

                        </div>
                        <script type="text/javascript">
                            var map;
                            $(document).ready(function(){
                                map = new GMaps({
                                    el: '#map3',
                                    lat: -12.043333,
                                    lng: -77.028333,
                                    mapTypeControlOptions: {
                                        mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm", "cloudmade"]
                                    }
                                });
                                map.addMapType("osm", {
                                    getTileUrl: function(coord, zoom) {
                                        return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
                                    },
                                    tileSize: new google.maps.Size(256, 256),
                                    name: "OpenStreetMap",
                                    maxZoom: 18
                                });
                                map.addMapType("cloudmade", {
                                    getTileUrl: function(coord, zoom) {
                                        return "http://b.tile.cloudmade.com/8ee2a50541944fb9bcedded5165f09d9/1/256/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
                                    },
                                    tileSize: new google.maps.Size(256, 256),
                                    name: "CloudMade",
                                    maxZoom: 18
                                });
                                map.setMapTypeId("osm");
                            });
                        </script>
                        <div class="col-md-6 map-2">

                            <div class="span11">
                                <div id="map"></div>
                            </div>
                            <script type="text/javascript">
                                var map;

                                var getTile = function(coord, zoom, ownerDocument) {
                                    var div = ownerDocument.createElement('div');
                                    div.innerHTML = coord;
                                    div.style.width = this.tileSize.width + 'px';
                                    div.style.height = this.tileSize.height + 'px';
                                    div.style.background = 'rgba(250, 250, 250, 0.55)';
                                    div.style.fontFamily = 'Monaco, Andale Mono, Courier New, monospace';
                                    div.style.fontSize = '10';
                                    div.style.fontWeight = 'bolder';
                                    div.style.border = 'dotted 1px #aaa';
                                    div.style.textAlign = 'center';
                                    div.style.lineHeight = this.tileSize.height + 'px';
                                    return div;
                                };

                                $(document).ready(function(){
                                    map = new GMaps({
                                        el: '#map',
                                        lat: -12.043333,
                                        lng: -77.028333
                                    });
                                    map.addOverlayMapType({
                                        index: 0,
                                        tileSize: new google.maps.Size(256, 256),
                                        getTile: getTile
                                    });
                                });
                            </script>
                        </div>
                        <div class="clearfix"> </div>

                    </div>
                    <div class="map-system">
                        <div class="col-md-6 map-1">
                            <div class="span11">
                                <div id="map2"></div>
                            </div>
                            <script type="text/javascript">
                                var map;
                                $(document).ready(function(){
                                    map = new GMaps({
                                        el: '#map2',
                                        lat: -12.043333,
                                        lng: -77.028333,
                                        zoomControl : true,
                                        zoomControlOpt: {
                                            style : 'SMALL',
                                            position: 'TOP_LEFT'
                                        },
                                        panControl : false,
                                        streetViewControl : false,
                                        mapTypeControl: false,
                                        overviewMapControl: false
                                    });
                                });
                            </script>
                        </div>
                        <div class="col-md-6 map-2">

                            <div class="span11">
                                <div id="map1"></div>

                            </div>
                            <script>
                                $(function () {
                                    var map = new GMaps({
                                        el: "#map1",
                                        lat: 41.895465,
                                        lng: 12.482324,
                                        zoom: 5,
                                        zoomControl : true,
                                        zoomControlOpt: {
                                            style : "SMALL",
                                            position: "TOP_LEFT"
                                        },
                                        panControl : true,
                                        streetViewControl : false,
                                        mapTypeControl: false,
                                        overviewMapControl: false
                                    });

                                    var styles = [
                                        {
                                            stylers: [
                                                { hue: "#00ffe6" },
                                                { saturation: -20 }
                                            ]
                                        }, {
                                            featureType: "road",
                                            elementType: "geometry",
                                            stylers: [
                                                { lightness: 100 },
                                                { visibility: "simplified" }
                                            ]
                                        }, {
                                            featureType: "road",
                                            elementType: "labels",
                                            stylers: [
                                                { visibility: "off" }
                                            ]
                                        }
                                    ];

                                    map.addStyle({
                                        styledMapName:"Styled Map",
                                        styles: styles,
                                        mapTypeId: "map_style"
                                    });

                                    map.setStyle("map_style");
                                });
                            </script>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!--//grid-->
            </div>

        </div>
    </section>
@endsection



