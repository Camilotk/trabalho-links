<?php

namespace Controller;

use Embed\Embed;

use Model\LinkModel;
use Model\CategoriaModel;
use Model\VO\LinkVO;

final class LinkController extends Controller
{

    public function selectAll()
    {
        $linkModel = new LinkModel();
        $links = $linkModel->selectAll();

        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->selectAll();

        $this->loadView("listaLinks", [
            "links" => $links,
            "categorias" => $categoria
        ]);
    }

    public function selectOne()
    {
        $id = $_GET["id"] ?? 0;

        if (empty($id)) {
            $vo = new LinkVO();
        } else {
            $model = new LinkModel();
            $vo = $model->selectOne($id);
        }

        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->selectAll();

        if (!isset($vo)) {
            die("Registro não existe!");
        }

        $this->loadView("formLink", [
            "link" => $vo,
            "categorias" => $categoria
        ]);
    }

    public function save()
    {
        $embed = new Embed();
        $info = $embed->get($_POST["link"]);

        $id = $_POST["id"];
        $model = new LinkModel();
        $vo = new LinkVO(
            $_POST["id"],
            $_POST["link"],
            $info->title,
            ($info->description) ? $info->description : " ",
            json_encode($info->keywords),
            $info->image->__toString(),
            $_POST["categoria"]
        );

        if (empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("links.php");
    }

    public function delete()
    {
        if (empty($_GET["id"])) {
            die("Necessário parrar o ID!");
        }

        $model = new LinkModel();
        $return = $model->delete($_GET["id"]);

        $this->redirect("links.php");
    }
}
