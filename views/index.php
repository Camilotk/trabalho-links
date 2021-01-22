<?php $title = "Embed";
include_once('template/header.php'); ?>
<div class="container">
    <ul>
        <li><a href="link.php">Cadastrar um link</a></li>
        <li><a href="links.php">Listar os links</a></li>
        <li><a href="categoria.php">Cadastrar uma categoria</a></li>
        <li><a href="categorias.php">Listar as categorias</a></li>
        <li><strong>Obs</strong> Listar os links pode estar um pouco lento devido a requisição do Embed demorar um pouco para resolver.</li>
    </ul>
</div>
<style>
    .container {
        margin-top: 15px;
    }

    li {
        margin-bottom: 10px;
    }

    ul {
        list-style-type: none;
    }

    ul>a {
        color: blue;
        font-size: 2em;
        text-decoration: none;
    }

    ul>a:hover {
        color: white;
        background-color: blue;
        text-decoration: none;
    }
</style>
<?php include_once('template/footer.php') ?>