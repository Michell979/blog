<?php require 'header.php'; ?>

<div class="contenedor">
    <?php foreach($posts as $post): ?>
        <div class="post">
            <article>

                <h2 class="titulo"> <a href="single.php?Id=<?php echo $post['Id'] ?>">
                        <?php echo $post['titulo'] ?>
                    </a></h2>

                <p class="fecha">
                    <?php echo fecha($post['fecha']); ?>
                </p>
                <div class="thumb">
                    <a href="single.php?Id=<?php echo $post['Id'] ?>">
                        <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb'] ?>" alt="imagen del post">
                    </a>
                </div>
                <p class="extracto">
                    <?php echo $post['extracto'] ?>
                </p>
                <a class="continuar text-decoration-none" href="single.php?Id=<?php echo $post['Id'] ?>">Entra al post</a>
            </article>
        </div>
    <?php endforeach; ?>



    <?php require 'paginacion.php'; ?>
</div>

<?php require 'footer.php' ?>


</body>

</html>