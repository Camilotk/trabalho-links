<?php

use Embed\Embed;

$embed = new Embed();
$title = "Lista de Links";
include_once('template/header.php');

function genTable($link, $html, $categorias)
{
    echo "<div class=\"content\">";
    echo "<h5 class=\"titulo\">" . $link->getTitulo() . "</h5>";
    foreach ($categorias as $categoria) {
        if ($categoria->getId() == $link->getCategoria()) {
            echo "<bold>Categoria</bold>: <a href=\"" . $link->getCategoria() . "\">" . $categoria->getNome() . "</a><br>";
        }
    }

    echo $html . '<br>'; // Aqui vai der brete no CORS se tiver bloqueando
    // jogador.php?id=<?php echo $jogador->getId() 
    echo "<a href=\"link.php?id=" . $link->getId() . "\">Editar</a> ";
    echo "<a href=\"excluirLink.php?id=" . $link->getId() . "\">Deletar</a>";
    echo "</div>";
} ?>

<div class="links-container">
    <?php
    foreach ($links as $link) {
        genTable($link, $embed->get($link->getLink())->getOEmbed()->get('html'), $categorias);
    } ?>
</div>
<style>
    .links-container {
        display: flex;
        flex-shrink: 0;
        flex-flow: row wrap;
        justify-content: flex-end;
        align-items: flex-end;
    }

    .content {
        width: max-content;
        border: 1px solid black;
        border-radius: 5%;
        margin: 15px;
        padding: 20px;
    }

    .titulo {
        width: 600px
    }
</style>";
<script>
    document.querySelectorAll("blockquote").forEach(e => e.parentNode.removeChild(e))
</script>
<? include_once('template/footer.php');