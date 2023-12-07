<?php require 'header.php'; ?>

<div class="contenedor">
    <h2>TUS POST</h2>
    <a href="nuevo.php" class="btn btn-primary fs-3">Nuevo Post</a>

    <?php foreach($posts as $post): ?>
        <section class="post">
            <article>
              <h2 class="titulo"><?php echo $post['Id'] . '.-' . $post['titulo']?></h2>
              <a class="text-decoration-none"href="editar.php?Id=<?php echo $post['Id']?>">Editar</a>
              <a class="text-decoration-none"href="single.php?Id=<?php echo $post['Id']?>">Ver</a>
              <a class="text-decoration-none"href="borrar.php?Id=<?php echo $post['Id']?>">Borrar</a>
            </article>
        </section>
    <?php endforeach; ?>

    </div>



    <?php require '../paginacion.php'; ?>

<?php require 'footer.php'; ?>

</body>

</html>