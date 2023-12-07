<?php require 'header.php'; ?>
<div class="contenedor">
<div class="post">
    <article>

        <h2 class="titulo">Nuevo Post</h2>
        <form class="formulario" method="post" enctype="multipart/form-data"
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="titulo" placeholder="Título del Artículo/Post">
            <input type="text" name="extracto" placeholder="Describe un poco del tema">
            <textarea name="texto" placeholder="Escribe todo lo que quieras del tema"></textarea>
            <input type="file" name="thumb">
            <input type="submit" value="Subir Post">
    </form>


    </article>

</div>
</div>
<?php require 'footer.php' ?>