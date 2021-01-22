<?php $title = "Cadastro de Link";
include_once('template/header.php') ?>
<div class="container">
    <h1>Cadastro de Link</h1>
    <form action="salvarLink.php" method="POST">
        <fieldset>
            <legend>Inserir um link</legend>
            <?php if (isset($link)) : ?>
                <input type="hidden" name="id" value="<?php echo $link->getId(); ?>">
            <?php endif ?>

            <div class="form-group">
                <label for="nome" class="label">URL:</label>
                <input type="text" name="link" id="link" class="form-control" placeholder="http://site..." value="<?php echo (isset($link)) ? $link->getLink() : ""; ?>">
            </div>

            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select class="form-control" id="categoria" name="categoria">
                    <?php foreach ($categorias as $categoria) : ?>
                        <option value="<?= $categoria->getId() ?>"><?= $categoria->getNome() ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </fieldset>
    </form>
</div>

<?php include_once('template/footer.php') ?>