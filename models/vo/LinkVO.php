<?php

namespace Model\VO;

final class LinkVO extends VO
{
    private string $link;
    private string $titulo;
    private string $descricao;
    private string $palavras_chave;
    private string $imagem;
    private int $categoria;


    public function __construct(
        $id = 0,
        $link = '',
        $titulo = "",
        $descricao = "",
        $palavras_chave = "",
        $imagem = "",
        $categoria = 0
    ) {
        parent::__construct($id);
        $this->link = $link;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->palavras_chave = $palavras_chave;
        $this->imagem = $imagem;
        $this->categoria = $categoria;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getPalavrasChave(): string
    {
        return $this->palavras_chave;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

    public function getCategoria(): int
    {
        return $this->categoria;
    }

    public function setCategoria(int $id): void
    {
        $this->categoria = $id;
    }
}
