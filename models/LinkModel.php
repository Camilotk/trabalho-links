<?php

namespace Model;

use Model\VO\LinkVO;
use Util\Database;

final class LinkModel extends Model
{

    public function selectAll()
    {
        $db = new Database();
        $query = "SELECT * FROM link";
        $data = $db->select($query);

        $arrLinks = [];

        foreach ($data as $row) {
            array_push($arrLinks, new LinkVO(
                $row["id"],
                $row["link"],
                $row["titulo"],
                $row["descricao"],
                $row["palavraschave"],
                $row["imagem"],
                $row["categoria_id"]
            ));
        }

        return $arrLinks;
    }

    public function selectOne($id)
    {
        $db = new Database();
        $query = "SELECT * FROM link WHERE id = :id";
        $binds = [":id" => $id];
        $data = $db->select($query, $binds);

        if (count($data) == 0) {
            return null;
        }

        $link = new LinkVO(
            $data[0]["id"],
            $data[0]["link"],
            $data[0]["titulo"],
            $data[0]["descricao"],
            $data[0]["palavraschave"],
            $data[0]["imagem"],
            $data[0]["categoria_id"]
        );

        return $link;
    }

    public function insert($vo)
    {
        $db = new Database();
        $query = "INSERT INTO link (titulo, link, descricao, palavraschave, imagem, categoria_id) VALUES (:titulo, :link, :descricao, :palavras_chave, :imagem, :categoria)";
        $binds = [
            ":titulo" => $vo->getTitulo(),
            ":link" => $vo->getLink(),
            ":descricao" => $vo->getDescricao(),
            ":palavras_chave" => $vo->getPalavrasChave(),
            ":imagem" => $vo->getImagem(),
            ":categoria" => $vo->getCategoria()
        ];

        $success = $db->execute($query, $binds);

        if ($success) {
            return $db->getLastInsertedId();
        }

        return null;
    }

    public function update($vo)
    {
        $db = new Database();
        $query = "UPDATE link SET titulo = :titulo, link = :link, descricao = :descricao, palavraschave = :palavras_chave, imagem = :imagem, categoria_id = :categoria WHERE id = :id";
        $binds = [
            ":id" => $vo->getId(),
            ":titulo" => $vo->getTitulo(),
            ":link" => $vo->getLink(),
            ":descricao" => $vo->getDescricao(),
            ":palavras_chave" => $vo->getPalavrasChave(),
            ":imagem" => $vo->getImagem(),
            ":categoria" => $vo->getCategoria()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($id)
    {
        $db = new Database();
        $query = "DELETE FROM link WHERE id = :id";
        $binds = [":id" => $id];

        return $db->execute($query, $binds);
    }
}
