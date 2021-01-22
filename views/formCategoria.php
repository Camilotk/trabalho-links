<?php $title = "Cadastro de Categoria";
include_once('template/header.php') ?>

<div class="container">
    <h1>Cadastro de Categoria</h1>
    <form action="salvarCategoria.php" method="POST">
        <fieldset>
            <legend>Inserir uma categoria</legend>

            <input type="hidden" name="id" value="<?php echo $categoria->getId(); ?>">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo $categoria->getNome(); ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </fieldset>
    </form>
</div>

<?php include_once('template/footer.php') ?>