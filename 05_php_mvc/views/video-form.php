<?php
require_once __DIR__ . '/inicio.php';
?>
<main class="container">
    <form method="post" class="container__formulario">
        <h2 class="formulario__titulo">Envie um vídeo!</h2>
        <div class="formulario__campo">
            <label for="url" class="campo__etiqueta">Link embed</label>
            <input name="url"
            value="<?= $video?->url; ?>" 
            class="campo__escrita"
            required
            placeholder="Por exemplo: https://www.youtube.com/embed/hastag"
            id="url" />
        </div>

        <div class="formulario__campo">
            <label for="titulo" class="campo__etiqueta">Titulo do Vídeo</label>
            <input name="titulo" value="<?= $video?->title; ?>" class="campo__escrita" required 
            placeholder="Neste campo, dê o nome do vídeo"
            id="titulo" />
        </div>

        <input type="submit" class="formulario__botao" value="Enviar" />
    </form>
</main>
<?php
require_once __DIR__ . '/fim.php';