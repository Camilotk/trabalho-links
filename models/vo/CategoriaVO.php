<?php

namespace Model\VO;

final class CategoriaVO extends VO
{

    private string $nome;

    public function __construct($id = 0, $nome = "")
    {
        parent::__construct($id);
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}
