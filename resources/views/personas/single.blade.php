<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <style>
        #map { height: 400px; }
    </style>
    <title>Leaflet Map example</title>
</head>


<body>
<?php the_post(); ?>
<h2>Pagina single de persona</h2>

<?php
$rut = get_field('rut');
$nombre = get_field('nombre');
$correo = get_field('correo');
$direccion = get_field('direccion');
?>

<p>Rut: <?php echo $rut ?></p>
<p>Nombre: <?php echo $nombre ?></p>
<p>Correo: <?php echo $correo ?></p>
<p>Direccion: <?php echo ($direccion['address']); ?></p>
<div id="map"></div>
<script>
    //Se adjunta mapa para ver la locación actual de la persona
    //Se utiliza OpenStreet para obtener las coordenadas de la dirección
    //y Mapbox para renderizar el mapa
    var map = L.map('map').setView(['<?=$direccion['lat']?>', '<?=$direccion['lng']?>'], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibHVpc21hY2h1Y2EiLCJhIjoiY2wweDFrcjU3MHJmaTNmcDV0aWkxMHd2biJ9.o6SlbU7RSt1GTeNknu5C4g'
    }).addTo(map);
    var marker = L.marker(['<?=$direccion['lat']?>', '<?=$direccion['lng']?>']).addTo(map);

</script>
</body>
</html>
