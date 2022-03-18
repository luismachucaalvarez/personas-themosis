<?php the_post(); ?>
<h2>Pagina single de persona</h2>

<?php
$rut = get_field('rut');
$nombre = get_field('nombre');
$correo = get_field('correo');
?>

<p>Rut: <?php echo $rut ?></p>
<p>Nombre: <?php echo $nombre ?></p>
<p>Correo: <?php echo $correo ?></p>
