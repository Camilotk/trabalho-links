<?php $title = "Cadastro de Link";
include_once('template/header.php') ?>
<div class="container">
    <h1>Lista de Categorias</h1>

    <table class="table" style="margin-top: 15px">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
        <?php foreach ($categorias as $categoria) { ?>
            <tr>
                <td><?php echo $categoria->getNome() ?></td>
                <td scope="row">
                    <a href="categoria.php?id=<?php echo $categoria->getId() ?>">Editar</a>
                    <a href="excluirCategoria.php?id=<?php echo $categoria->getId() ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="categoria.php" class="btn btn-outline-secondary" style="margin-top: 5px;">Inserir</a>
    <?php include_once('template/footer.php') ?>