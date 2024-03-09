@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
    <link rel="stylesheet" href="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.css" />
    <script src="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.js"></script>

    <style>
        body {
            height: 100vh;
            width: 100vw;
            margin: 0;
        }

        #map {
            height: 100%;
            width: 100%;
        }
    </style>
    @endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">جدول‌داده /</span>  لیست گزارشات پرسنل مراکز
            </h4>

            <div id="map"></div>

        </div>
    </div>
            @endsection
            @section('scripts')
                <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
                <script src="../../assets/vendor/libs/datatables-bs5/i18n/fa.js"></script>
                <!-- Flat Picker -->
                <script src="../../assets/vendor/libs/moment/moment.js"></script>
                <script src="../../assets/vendor/libs/jdate/jdate.js"></script>
                <script src="../../assets/vendor/libs/flatpickr/flatpickr-jdate.js"></script>
                <script src="../../assets/vendor/libs/flatpickr/l10n/fa-jdate.js"></script>

                <!-- Main JS -->
                <script src="../../assets/js/main.js"></script>

                <!-- Page JS -->
                <script src="../../assets/js/tables-datatables-contradictions2.js"></script>
                <script>

                    // Create a Leaflet map
                    const neshanMap = new L.Map("map", {
                        key: "web.dda34d32ec804b969bfb5db4d2cdaece", // Get your own API Key on https://platform.neshan.org/panel
                        maptype: "neshan",
                        poi: true,
                        traffic: true,
                        center: [33.699756, 51.338076],
                        zoom: 5,
                        animate	:true
                    })

                    // define Icons for Leaflet
                    var greenIcon = new L.Icon({
                        iconUrl: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAACXBIWXMAAAsSAAALEgHS3X78AAABZVBMVEUAAAD+xGPxV3b9w2JeSSX0WHgOAwX/xWP/x2X/xmQAAACs9PoTCAj8jksAAACsxeMAAAAWEQgEAwPGR2HiGEQdCg7frVe8RFxrUykAAABml8UfGAyrEzPSo1IJDQ/9qVcAAABqJjT2i0pIKRYfLTKUczozEBegfD6yiUXFmk35wWFMPB6CZjP/x2TOoFH3vmBHNxy7GDtc6u43VWLhUW4tP03sVXSRNEcAAADfF0Kv9/3vUHFUc5DiI0wAAABGGSKFu8AAAAAAAACtxuSf4eYbEAgUGyGhvNt9lqmTsdNWHyr///4AAAD/5r1fjLcAAABxnckAAACvyOZbNhx0iaEAAAAAAADBRV6CqdGsPlSJ8PX+0oYAAAAAAACvyOeux+YAAAD/+/NQtrjPdj54XS7st1x/YzH+zHf+0IFg2dzxV3bClkz+2Zipg0L7qFfqOF7/oFSU0dYAgABpAAAAAGNHcExHcEzuIr97AAAAd3RSTlP/////////////6f///y//lv////8D////pv///////5D//////////////////////////////77//////w7//9z3//9Y//////v/Qf//nv8k////Fn7//////5Vi//8B///7////////tP//////PP9+nv8AAAU0DKwAAAVeSURBVHja7ZrrW9pIFIcDFNSIYoNooJaaLqa3vSFEUNNYoAgiglAudRUv24uue//Sv3/nTBJzIQihhDz7dH6fdDI5eZM55wxzZqgvLosiAASAABAAAkAACAABIAAEgAAQAAJAABadUeNyVADaGS1FRgVwSNH/FcDDd0gPJqdXjE2A754uPP3L45uUZh4/tA+w8GTGMynNfcMAfxwdHV1rAMUlC/UkBwGODg8PT313AOtW4ZFflxwFuBoGgC41jJkwH3hnApiZmTH9YdFkcc1zdHVlBgiYBATZRcNcUPzwYUEPMPucZdnHc8jwykeWfeZDTb4Nlv38CfWYe4Gu/Q7XPn1m2Y2X0P9Plv24gu/2XZ+e3sx6DABra2vJVZ04lCOoXFU/G/6zsGAE+J6imOez6Gk/IkMPAODlK5StVtBzZ5+h2zdmAe4RRf38E/RnKSr44gf5XpQFPAaAwNry8utdv6YtDj4C3YvYBngkAzC2AbZf73r1ygTBFTvS4CEYH+D65sY0BBYA3hMeCJbad9Nx0OiE4wP4+p3QCsDf5XXB0B+GX/EF+sPQCsDrT1dwMFSdADi0AEj3KYwJcsVJA+BUbAZYTu7xZu3xEI04GCYK4Jmb8/SHYTIw8GcL3ZgwgHE2VAGCAwHy1WkBxBP92kfP6U0LQPgN6a1RZWSrMy2A1Obm5i/zBu28iVPU0qV7APP/ojHIRlwEeJtAAG0XAeYFlIsabgKkUCKougkgokTQcxFgB8fhNAF2jM/HcRidViL6FemNSWUEkJ3WXBC3EkzJ7k5GyAunARAYVkxwFmA7yQ1ScDoAfb8JVW3tfTsAWyDXAJJcBevEBgA15trw3ijI+EcEGHt1PCEAWO9bFANGqQ8MAOCDWCMDTKxIpTphWFba6xaAUh8wrg+hYWoA/SkgnAHxrgH4M/fMBe4AOFArjkRMANgL/FYATlTLc9F6PacH8KdPMlyFy4QhJfuNPgBiGEe2De4AtjI85COGCnJhJQi0KHBQKkC6or0gf2LOA0wgEJCTldyLwb/W4Ha5VUmlTFy5HLQhXCf0ykUh1ULwxATAryWTSchVuIQXF8RWWUzAhQrOYF3cL5ESW61UHN8fHlnd9O4u+gCc0QIfNgFsLy//DWMC/fbF2HGp2TxIIdhgGIaqi7AYoRZ7HzoPtdCKluK8/pEl1+V0FsrYwpYeIKAChKGUIcZQv1CoWUJLxwAHNgBLiCGsQih03orDC4z4ZBUUW6jJFi5gNSC/mW4IcEW5qzwpBv1CTejIr66uQmFTxUJCK0om010dKvjKYfnPfguUbOEuDJETxpVaugivCt0KpYRSbYfhQ1gHBXx7i5G9dpg4BMBpNfpETbXQBAtyGd8i9AH0WAYNCVqzcAeAP8woqtze3lbsWxgKcFEeLWMxdZSL69r/2jc8NwFo20lnsFBMqUNwcYDcla6fndVpFBo1dQSbIlR5z5aGCsqw8q7V/Rb02/fVvG6sCiJ61Tqa0yJoBR1PKR+mcJCAsoa9HXqwwKgWmmAhX7U8P9DOKuESKlxcQLzm4TW+9BicHRBXoVkCF85KNs8IFPODLRgOMPTykDDE2vvSgQh1TLkf5tpP1Y5LpbLAqFh2JCkWYhYWDAAS9pp4QhD28d6SsrtVpcGr9hNCArvPesT2MYlqzmDhLDLoCEc7qnNPbW+rSCuujd1bGuOgRjGnt9AefIZE6tBq5UC/u1fN5lWqjjTWURHNAm20YD7EcrnYyeZoOhctGrpJxSi0ZjuL4x5W0SxcDjtFIzUWG+2+cY60UbP0NedlrC2Qc0QEgAAQAAJAAAgAASAABIAAEAACQABcB/gPZkMsVva3wOAAAAAASUVORK5CYII=',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        shadowSize: [41, 41]
                    });

                    var redIcon = new L.Icon({
                        iconUrl: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAACXBIWXMAAAsSAAALEgHS3X78AAABZVBMVEUAAAD+xGPxV3b9w2JeSSX0WHgOAwX/xWP/x2X/xmQAAACs9PoTCAj8jksAAACsxeMAAAAWEQgEAwPGR2HiGEQdCg7frVe8RFxrUykAAABml8UfGAyrEzPSo1IJDQ/9qVcAAABqJjT2i0pIKRYfLTKUczozEBegfD6yiUXFmk35wWFMPB6CZjP/x2TOoFH3vmBHNxy7GDtc6u43VWLhUW4tP03sVXSRNEcAAADfF0Kv9/3vUHFUc5DiI0wAAABGGSKFu8AAAAAAAACtxuSf4eYbEAgUGyGhvNt9lqmTsdNWHyr///4AAAD/5r1fjLcAAABxnckAAACvyOZbNhx0iaEAAAAAAADBRV6CqdGsPlSJ8PX+0oYAAAAAAACvyOeux+YAAAD/+/NQtrjPdj54XS7st1x/YzH+zHf+0IFg2dzxV3bClkz+2Zipg0L7qFfqOF7/oFSU0dYAgABpAAAAAGNHcExHcEzuIr97AAAAd3RSTlP/////////////6f///y//lv////8D////pv///////5D//////////////////////////////77//////w7//9z3//9Y//////v/Qf//nv8k////Fn7//////5Vi//8B///7////////tP//////PP9+nv8AAAU0DKwAAAVeSURBVHja7ZrrW9pIFIcDFNSIYoNooJaaLqa3vSFEUNNYoAgiglAudRUv24uue//Sv3/nTBJzIQihhDz7dH6fdDI5eZM55wxzZqgvLosiAASAABAAAkAACAABIAAEgAAQAAJAABadUeNyVADaGS1FRgVwSNH/FcDDd0gPJqdXjE2A754uPP3L45uUZh4/tA+w8GTGMynNfcMAfxwdHV1rAMUlC/UkBwGODg8PT313AOtW4ZFflxwFuBoGgC41jJkwH3hnApiZmTH9YdFkcc1zdHVlBgiYBATZRcNcUPzwYUEPMPucZdnHc8jwykeWfeZDTb4Nlv38CfWYe4Gu/Q7XPn1m2Y2X0P9Plv24gu/2XZ+e3sx6DABra2vJVZ04lCOoXFU/G/6zsGAE+J6imOez6Gk/IkMPAODlK5StVtBzZ5+h2zdmAe4RRf38E/RnKSr44gf5XpQFPAaAwNry8utdv6YtDj4C3YvYBngkAzC2AbZf73r1ygTBFTvS4CEYH+D65sY0BBYA3hMeCJbad9Nx0OiE4wP4+p3QCsDf5XXB0B+GX/EF+sPQCsDrT1dwMFSdADi0AEj3KYwJcsVJA+BUbAZYTu7xZu3xEI04GCYK4Jmb8/SHYTIw8GcL3ZgwgHE2VAGCAwHy1WkBxBP92kfP6U0LQPgN6a1RZWSrMy2A1Obm5i/zBu28iVPU0qV7APP/ojHIRlwEeJtAAG0XAeYFlIsabgKkUCKougkgokTQcxFgB8fhNAF2jM/HcRidViL6FemNSWUEkJ3WXBC3EkzJ7k5GyAunARAYVkxwFmA7yQ1ScDoAfb8JVW3tfTsAWyDXAJJcBevEBgA15trw3ijI+EcEGHt1PCEAWO9bFANGqQ8MAOCDWCMDTKxIpTphWFba6xaAUh8wrg+hYWoA/SkgnAHxrgH4M/fMBe4AOFArjkRMANgL/FYATlTLc9F6PacH8KdPMlyFy4QhJfuNPgBiGEe2De4AtjI85COGCnJhJQi0KHBQKkC6or0gf2LOA0wgEJCTldyLwb/W4Ha5VUmlTFy5HLQhXCf0ykUh1ULwxATAryWTSchVuIQXF8RWWUzAhQrOYF3cL5ESW61UHN8fHlnd9O4u+gCc0QIfNgFsLy//DWMC/fbF2HGp2TxIIdhgGIaqi7AYoRZ7HzoPtdCKluK8/pEl1+V0FsrYwpYeIKAChKGUIcZQv1CoWUJLxwAHNgBLiCGsQih03orDC4z4ZBUUW6jJFi5gNSC/mW4IcEW5qzwpBv1CTejIr66uQmFTxUJCK0om010dKvjKYfnPfguUbOEuDJETxpVaugivCt0KpYRSbYfhQ1gHBXx7i5G9dpg4BMBpNfpETbXQBAtyGd8i9AH0WAYNCVqzcAeAP8woqtze3lbsWxgKcFEeLWMxdZSL69r/2jc8NwFo20lnsFBMqUNwcYDcla6fndVpFBo1dQSbIlR5z5aGCsqw8q7V/Rb02/fVvG6sCiJ61Tqa0yJoBR1PKR+mcJCAsoa9HXqwwKgWmmAhX7U8P9DOKuESKlxcQLzm4TW+9BicHRBXoVkCF85KNs8IFPODLRgOMPTykDDE2vvSgQh1TLkf5tpP1Y5LpbLAqFh2JCkWYhYWDAAS9pp4QhD28d6SsrtVpcGr9hNCArvPesT2MYlqzmDhLDLoCEc7qnNPbW+rSCuujd1bGuOgRjGnt9AefIZE6tBq5UC/u1fN5lWqjjTWURHNAm20YD7EcrnYyeZoOhctGrpJxSi0ZjuL4x5W0SxcDjtFIzUWG+2+cY60UbP0NedlrC2Qc0QEgAAQAAJAAAgAASAABIAAEAACQABcB/gPZkMsVva3wOAAAAAASUVORK5CYII=',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        shadowSize: [41, 41]
                    });

                    // add custom marker
                    var redMarker = L.marker([35.699756, 51.338076], { icon: redIcon, title: "توضیحات مد نظر شما" }).addTo(neshanMap).on('click', function(e) {
      alert("hi. you clicked the marker at " + e.latlng);
});;
                    var aMarker = L.marker([35.699756, 51.338076], { icon: redIcon, title: "توضیحات مد نظر شما" }).addTo(neshanMap).on('click', function(e) {
      alert("hi. you clicked the marker at " + e.latlng);
});;
                    var aMarker = L.marker([35.599756, 51.338076], { icon: redIcon, title: "توضیحات مد نظر شما" }).addTo(neshanMap).on('click', function(e) {
      alert("hi. you clicked the marker at " + e.latlng);
});;
                    var aMarker = L.marker([35.299756, 51.338076], { icon: redIcon, title: "توضیحات مد نظر شما" }).addTo(neshanMap).on('click', function(e) {
      alert("hi. you clicked the marker at " + e.latlng);
});;
                    var aMarker = L.marker([35.399756, 51.338076], { icon: redIcon, title: "توضیحات مد نظر شما" }).addTo(neshanMap).on('click', function(e) {
      alert("hi. you clicked the marker at " + e.latlng);
});;
                    var aMarker = L.marker([35.499756, 51.338076], { icon: redIcon, title: "توضیحات مد نظر شما" }).addTo(neshanMap).on('click', function(e) {
      alert("hi. you clicked the marker at " + e.latlng);
});;
                    var aMarker = L.marker([35.899756, 51.338076], { icon: redIcon, title: "توضیحات مد نظر شما" }).addTo(neshanMap).on('click', function(e) {
      alert("hi. you clicked the marker at " + e.latlng);
});;


                    // create Pop up for marker
                    var popup = L.popup()
                        .setContent('<p style="text-align:center;">سلام<br />با نگه داشتن موس می‌توانید من را جابه‌جا کنید</p>')

                    // add custom draggable marker
                    let greenMarker = L.marker([35.700357, 51.359829],
                        { icon: greenIcon, draggable: true, title: "توضیحات مد نظر شما" , opacity:0.9,zIndex:1})
                        .bindPopup(popup)
                        .addTo(neshanMap)
                        .openPopup();

                </script>
                @endsection

{{-- <!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Neshan Leaflet Map</title>


</head>

<body>

</body>

</html> --}}




