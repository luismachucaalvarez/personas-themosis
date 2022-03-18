

<h3>Nueva Prueba Personas...</h3>

<?php while ( have_posts() ) : the_post(); ?>

    <p>Nombre: <?php the_field('rut'); ?></p>
    <p>Nombre: <?php the_field('nombre'); ?></p>
    <p>Nombre: <?php the_field('correo'); ?></p>

<?php endwhile; // end of the loop. ?>