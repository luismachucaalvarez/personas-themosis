

<h3>Personas...</h3>
<div id="app"></div>
<table>
    <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Correo</th>
        <td>Dirección</td>
    </tr>
    <?php while ( have_posts() ) : the_post(); ?>
    <tr>
        <td><?php the_field('rut'); ?></td>
        <td><?php the_field('nombre'); ?></td>
        <td><?php the_field('correo'); ?></td>
        <td><?php echo get_field('direccion')['address']; ?></td>
    </tr>



    <?php endwhile; // end of the loop. ?>
</table>

